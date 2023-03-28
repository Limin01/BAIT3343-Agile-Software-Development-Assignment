<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // reset array keys
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity'])) {
    $quantity = array_map('intval', $_POST['quantity']);
    foreach ($quantity as $index => $value) {
        if (isset($_SESSION['cart'][$index])) {
            $_SESSION['cart'][$index]['quantity'] = $value;
        }
    }
}

$total = 0;
function get_cart_total() {
                $total = 0;
                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        $total += $item['price'] * $item['quantity'];
                    }
                }
                return $total;
            }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="cart.css">
        
    </head>
    <body>
        <h1>Shopping Cart</h1>
        <?php if (empty($_SESSION['cart'])) : ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
                        <tr>
                            <td><?php echo $cartItem['name']; ?></td>
                            <td><img src="<?php echo $cartItem['imageUrl']; ?>" alt="<?php echo $cartItem['name']; ?>" width="200"></td>
                            <td><?php echo $cartItem['price']; ?></td>
                            <td>
                                
                                    <input type="hidden" name="id" value="<?php echo $cartItem['id']; ?>">
                                    <input type="number" name="quantity" value="<?php echo $cartItem['quantity']; ?>" min="1">
                                    
                                </form>
                            </td>
                            <td><?php echo $cartItem['price'] * $cartItem['quantity']; ?></td>
                            <td>
                                    <input type="hidden" name="id" value="<?php echo $cartItem['id']; ?>">
                                    <button type="submit">Remove</button>
                            </td>
                        </tr>
                        <tr class="separator">
                            <td colspan="6"></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <?php $total = get_cart_total(); ?>
                        <td colspan="3" class="text-right"><h5>Total:</h5></td>
                        <td><h3><?php echo '$' . number_format($total, 2); ?></h5></td>
                        <td></td>
                        <td><a href="checkout.php"><button>Checkout</button></a></td>

                    </tr>
                </tbody>
            </table>
        <?php endif; ?>
        <a href="foodmenu.php">Continue shopping</a>
    </body>
</html>
