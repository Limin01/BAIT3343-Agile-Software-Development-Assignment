<?php
require_once 'model/FoodItem.php';

// Define the food menu
$foodMenu = array(
    new FoodItem(1001, "Hamburger", 5.99, "A juicy hamburger with your choice of toppings.", "images/hamburger.jpg"),
    new FoodItem(1002, "Cheeseburger", 6.49, "A hamburger with cheese and your choice of toppings.", "images/cheeseburger.jpg"),
    new FoodItem(1003, "French Fries", 2.99, "Crispy golden french fries.", "images/french_fries.jpg"),
    new FoodItem(1004, "Onion Rings", 3.49, "Crispy golden onion rings.", "images/onion_rings.jpg"),
    new FoodItem(1005, "Soft Drink", 1.99, "Your choice of soda or iced tea.", "images/soft_drink.jpeg")
);

// Output the HTML page
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Food Menu</title>

        <link rel="stylesheet" href="foodmenu.css">
        <style>

        </style>
    </head>
    <body>
        <h1>Food Menu</h1>
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
                            <button><a href="order.php?id=<?php echo $item->id(); ?>">Order</a></button>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>

        <script>

        </script>
    </body>
</html>
