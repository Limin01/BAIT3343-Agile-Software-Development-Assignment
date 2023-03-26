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
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #F5F5F5;
            }
            h1, h3 {
                color: #FF4500;
                text-align: center;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            li {
                width: 30%;
                margin: 20px;
                padding: 20px;
                background-color: #FFF;
                border-radius: 5px;
                box-shadow: 0px 0px 5px 0px #999;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
            }
            p {
                font-size: 18px;
                color: #333;
                margin: 10px 0 0;
            }
            a {
                color: #FF4500;
                text-decoration: none;
            }
            .food-price {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 10px;
            }
            .food-price span {
                font-size: 24px;
                font-weight: bold;
            }

            .food-price span:before {
                content: "Price";
                color: #FF4500;
            }

            .order-button button {
                color: #FFFFFF;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                font-size: 18px;
                cursor: pointer;
                transition: all 0.2s ease-in-out;
                text-transform: uppercase;
            }

            .order-button button:hover {
                background-color: #FFFFFF;
                color: #FF4500;
                border: 2px solid #FF4500;
            }

            .order-button {
                margin-top: 10px;
                text-align: right;
            }
 
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
                            <button><a href="order.php" >Order</a></button>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>

        <script>

        </script>
    </body>
</html>
