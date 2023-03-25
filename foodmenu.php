<?php

// Define a class to represent a food item
class FoodItem {
    public $id;
    public $name;
    public $price;
    public $description;
    public $imageUrl;
    
    public function __construct($id, $name, $price, $description, $imageUrl) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
    }

    public function toString() {
        return $this->description . "<br><br>RM" . number_format($this->price, 2)."<br>";
    }
}

// Define the food menu
$foodMenu = array(
    new FoodItem(1001, "Hamburger", 5.99, "A juicy hamburger with your choice of toppings.",  "images/hamburger.jpg"),
    new FoodItem(1002, "Cheeseburger", 6.49, "A hamburger with cheese and your choice of toppings.",  "images/cheeseburger.jpg"),
    new FoodItem(1003, "French Fries", 2.99, "Crispy golden french fries.",  "images/french_fries.jpg"),
    new FoodItem(1004, "Onion Rings", 3.49, "Crispy golden onion rings.",   "images/onion_rings.jpg"),
    new FoodItem(1005, "Soft Drink", 1.99, "Your choice of soda or iced tea.",  "images/soft_drink.jpeg")
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
    </style>
</head>
<body>
    <h1>Food Menu</h1>
    <ul>
    <?php foreach ($foodMenu as $item) { ?>
        <li>
            <img src="<?php echo $item->imageUrl; ?>" alt="<?php echo $item->name; ?>" width="200" height="150">
            <h3><?php echo $item->name; ?></h3>
            <p style="width: 45%; float: left "><?php echo $item->toString(); ?></p>
            <p><a href="order.php" >Order</a></p>
        </li>
    <?php } ?>
    </ul>

    <script>
        
    </script>
</body>
</html>
``
