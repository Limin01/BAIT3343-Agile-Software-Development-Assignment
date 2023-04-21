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
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <link rel="stylesheet" type="text/css" href="css/table.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
                <h2>Food Catering System</h2>
                <ul>
                    <li><a href="admin_dashboard.php">Dashboard</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="admin_menu.php">Menu</a></li>
                    <li><a href="#">Orders</a></li>
                </ul>
            </div>
            <div class="main-content">
                <h1>Menu Record</h1>
                <p>
                    <a href="create_food.php" class="create-btn">Create</a>
                    <!--                    {{ count($products) }} record(s)-->
                </p>
                <table>
                    <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>Food Category</th>
                            <th>Food Name</th>
                            <th>Food Price</th>
                            <th>Food Description</th>
                            <th>Food Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Perform database query to retrieve all foods
                        $query = "SELECT * FROM food";
                        $result = mysqli_query($conn, $query);

                        // Loop through each row in the result set and display it in a table row
                        foreach ($result as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['food_id'] . "</td>";
                            echo "<td>" . $row['food_category'] . "</td>";
                            echo "<td>" . $row['food_name'] . "</td>";
                            echo "<td>" . "RM" . $row['food_price'] . "</td>";
                            echo "<td>" . $row['food_desc'] . "</td>";
                            echo "<td><img src='images/" . $row['food_img'] . "' width='150px' height='150px' accept='.jpg, .jpeg, .png'></td>";
                            echo "<td><a href='edit.php?food_id=" . $row['food_id'] . "'>Edit</a> | <a href='delete.php?food_id=" . $row['food_id'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }

                        // Close database connection
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
