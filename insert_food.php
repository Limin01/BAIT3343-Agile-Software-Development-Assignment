<?php

// Connect to the database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bait3343';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$food_id = $_POST['food_id'];
$food_category = $_POST['food_category'];
$food_name = $_POST['food_name'];
$food_price = $_POST['food_price'];
$food_desc = $_POST['food_desc'];
$food_img = $_FILES['food_img']['name'];

// Sanitize the input data
$food_id = mysqli_real_escape_string($conn, $food_id);
$food_category = mysqli_real_escape_string($conn, $food_category);
$food_name = mysqli_real_escape_string($conn, $food_name);
$food_price = mysqli_real_escape_string($conn, $food_price);
$food_desc = mysqli_real_escape_string($conn, $food_desc);
$food_img = mysqli_real_escape_string($conn, $food_img);

// Validate the form data
if (empty($food_id) || empty($food_category) || empty($food_name) || empty($food_price) || empty($food_desc) || empty($food_img)) {
    die("Please fill in all fields");
}

if (!is_numeric($food_price)) {
    die("Food price must be a number");
}

// Upload the food image to the server
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["food_img"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$allowed_extensions = array("jpg", "jpeg", "png", "gif");

if (!in_array($imageFileType, $allowed_extensions)) {
    die("Sorry, only JPG, JPEG and PNG files are allowed.");
}

if (move_uploaded_file($_FILES["food_img"]["tmp_name"], $target_file)) {
    // Insert the food data into the database
    $sql = "INSERT INTO food (food_id, food_category, food_name, food_price, food_desc, food_img)
            VALUES ('$food_id', '$food_category', '$food_name', '$food_price', '$food_desc', '$food_img')";

    if ($conn->query($sql) === TRUE) {
        echo "Food created successfully";
        echo '<br><br><input type="button" value="Return to menu page" onClick="javascript:history.go(-2)">';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    die("Sorry, there was an error uploading your file.");
}

// Close the database connection
$conn->close();
?>
