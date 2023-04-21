<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
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
    } else if (!is_numeric($price)) {
        $errors[] = "Price must be a number";
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
        $target_dir = "images/";
        $target_file = $target_dir . basename($image["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($image["tmp_name"], $target_file);

        
        // Get the latest food id from the database
        $sql = "SELECT id FROM fooditem ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row["id"] + 1;
        } else {
            $id = 1;
        }
        
        // Insert the food item into the database
        $sql = "INSERT INTO fooditem (name, price, description, imageUrl) VALUES ('$name',  '$price','$description', '$target_file')";

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

