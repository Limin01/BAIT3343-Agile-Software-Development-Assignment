<?php
session_start();

require_once 'model/FoodItem.php';

// Connect to the database
$dsn = 'mysql:host=localhost;dbname=Foodcater';
$username = 'root';
$password = '';
$pdo = new PDO($dsn, $username, $password);

// Prepare and execute the query to retrieve the food items
$query = 'SELECT id, name, price, description, imageUrl FROM foodItem';
$stmt = $pdo->query($query);

// Map the results to FoodItem objects
$foodMenu = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $foodItem = new FoodItem($row['id'], $row['name'], $row['price'], $row['description'], $row['imageUrl']);
    $foodMenu[] = $foodItem;
}

// Output the HTML page
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Food Menu</h1>
        <link rel="stylesheet" href="foodmenu.css">

        </head>
        <body>
        <ul>
            <?php foreach ($foodMenu as $item) { ?>
                <li>
                    <img src="<?php echo $item->imageUrl; ?>" alt="<?php echo $item->name; ?>" width="200" height="150" style="align-self: center">
                    <h3><?php echo $item->name; ?></h3>
                    <div class="food-description">
                        <p><?php echo $item->description(); ?></p>
                    </div>
                    <div class="food-price">
                        <span><?php echo $item->price(); ?></span>
                        <div class="order-button">
                            <button><a href="order.php?id=<?php echo $item->id; ?>">Order</a></button>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>
