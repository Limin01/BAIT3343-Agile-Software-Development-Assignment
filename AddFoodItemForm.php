<!DOCTYPE html>
<?php
include_once './add_food.php';

?>
<html>
<head>
    <title>Food Directory</title>
    <link rel="stylesheet" href="AddFoodForm.css">
    <style>
       
    </style>
</head>
<body>
    <div class="directory">
        <h2>Food Directory</h2>
        <ul>
            <li><a href="#">Add Food</a></li>
            <li><a href="#">Edit Food</a></li>
            <li><a href="#">Delete Food</a></li>
        </ul>
    </div>
    <form method="post" enctype="multipart/form-data">
        <h1>Add Food Item</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br>
        <label for="image">Image:</label>
        <input type="file" name="image" required><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
