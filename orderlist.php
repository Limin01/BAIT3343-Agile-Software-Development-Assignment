<?php
// Include database connection file
require_once 'db_connection.php';

// Retrieve orders from the database
$conn = mysqli_connect('localhost', 'root', '', 'foodcater');
if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Order List</title>
        <link rel="stylesheet" href="orderlist.css">
    </head>
    <body>
        <h1>Order List</h1>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Item </th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['orderId']; ?></td>
                        <td><?php
                            $cartItems = json_decode($row['cartItemList'], true); // decode JSON into array
                            foreach ($cartItems as $item) {
                                echo $item['name'] . ': ' . $item['price'] . '<br>';
                            }
                            ?></td>

                        <td><?php echo 'RM' . number_format($row['totalPrice'], 2); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </body>
</html>
