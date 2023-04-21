<?php
session_start();

require_once 'db_connection.php';

if (isset($_GET['id'])) {
    $itemId = $_GET['id'];

    // Retrieve food item details from database
    $conn = get_connection();
    $stmt = $conn->prepare("SELECT id, name,  price, description, imageUrl FROM FoodItem WHERE id = ?");
    $stmt->bind_param("i", $itemId);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_object();
    $stmt->close();
    $conn->close();

    if (!$item) {
        echo "Food item not found.";
        exit();
    }
} else {
    echo "An error occurred.";
    exit();
}

// Add the item to the shopping cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity']) && isset($_POST['id'])) {
    $itemId = $_POST['id'];
    $quantity = intval($_POST['quantity']);
    if ($quantity > 0) {
        $item = null;

        // Retrieve food item details from database
        $conn = get_connection();
        $stmt = $conn->prepare("SELECT id, name, price, description, imageUrl FROM FoodItem WHERE id = ?");
        $stmt->bind_param("i", $itemId);
        $stmt->execute();
        $result = $stmt->get_result();
        $item = $result->fetch_object();
        $stmt->close();

        if ($item !== null) {
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
            $cart[] = array('id' => $item->id, 'name' => $item->name, 'price' => $item->price, 'quantity' => $quantity,'remark' => isset($_POST['remark']) ? $_POST['remark'] : '', 'imageUrl' => $item->imageUrl);
            $_SESSION['cart'] = $cart;

            header('Location: ' . $_POST['cart_url']);
            exit();
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Order <?php echo $item->name; ?></title>
        <link rel="stylesheet" href="foodmenu.css">
    </head>
    <body>
        <h1>Order <?php echo $item->name; ?></h1>
        <div class="food-details">
            <img src="<?php echo $item->imageUrl; ?>" alt="<?php echo $item->name; ?>" width="400" height="350">
            <div>
                <p><strong>Price:</strong> <?php echo $item->price; ?></p>
                <p><strong>Description:</strong> <?php echo $item->description; ?></p><br>
            </div>
        </div>
        <form method="post">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="1" min="1" required><br><br>
            <label for="remark">Remark:</label>
            <input type="text" name="remark"><br>
            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            <br><br>
            <input type="hidden" name="cart_url" value="cart.php">
            <button type="submit">Add to Cart</button>
            <a href="foodmenu.php">Cancel</a>
        </form>
    </body>
</html>
