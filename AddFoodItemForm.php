<!DOCTYPE html>
<?php
?>
<html>
<head>
    <title>Food Directory</title>
    <style>
        /* Style the directory menu */
        .directory {
            display: inline-block;
            width: 150px;
            background-color: #f2f2f2;
            padding: 8px;
        }

        .directory ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .directory li {
            margin: 4px 0;
            font-size: 18px;
        }

        .directory li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        .directory li a:hover {
            background-color: #ddd;
        }

        /* Style the form */
        form {
            display: inline-block;
            vertical-align: top;
            margin-left: 50px;
        }

        form label {
            display: block;
            font-size: 18px;
            margin-bottom: 4px;
        }

        form input[type=text], form textarea, form input[type=number], form input[type=file] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 12px;
            font-size: 18px;
        }

        form input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        form input[type=submit]:hover {
            background-color: #45a049;
        }
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
