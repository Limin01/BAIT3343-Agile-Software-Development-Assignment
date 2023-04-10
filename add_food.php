<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $image = $_FILES["image"];

    // Validate the form data
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($description)) {
        $errors[] = "Description is required";
    }
    if (empty($price)) {
        $errors[] = "Price is required";
    }
    if (empty($image["name"])) {
        $errors[] = "Image is required";
    }

    // If there are no errors, add the food item to the database
    if (empty($errors)) {
        // Get a database connection
        require_once('db_connection.php');
        $conn = get_connection();

        // Upload the image file
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($image["tmp_name"], $target_file);

        // Insert the food item into the database
        $sql = "INSERT INTO food_items (food_id, name, description, price, image) VALUES (NULL, '$name', '$description', '$price', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "Food item added successfully";
        } else {
            echo "Error adding food item: " . $conn->error;
        }

        $conn->close();
    } else {
        // If there are errors, display them to the user
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
