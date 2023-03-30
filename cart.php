<?php
session_start();
require_once 'db_connection.php';

$index = 0;
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['remove'])) {
        $index = $_POST['remove'];
        if (isset($_SESSION['cart'][$index])) {
            unset($_SESSION['cart'][$index]);
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity'])) {
    $quantity = array_map('intval', $_POST['quantity']);
    foreach ($quantity as $index => $value) {
        if (isset($_SESSION['cart'][$index])) {
            $_SESSION['cart'][$index]['quantity'] = $value;
        }
    }
}

$total = 0;

function get_cart_total() {
    $total = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    }
    return $total;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['creatorder'])){

  // Connect to the database
  $db = new get_connection();

  // Prepare the SQL statement
  $stmt = $db->prepare('INSERT INTO orders (cartItemList, totalPrice, userId) VALUES (:cartItemList, :totalPrice, :userId)');

  // Bind the parameters
  $stmt->bindParam(':cartItemList', json_encode($cartItemList));
  $stmt->bindParam(':totalPrice', $totalPrice);
  $stmt->bindParam(':userId', $userId);

  // Execute the statement
  $stmt->execute();

  // Close the database connection
  $db = null;
}


  

?>


<!DOCTYPE html>
<html>
    <head>
        <style>
            .no-style {
                background: none;
                border: none;
                margin: 0;
                padding: 0;
                font: inherit;
                color: inherit;
                outline: none;
                width: auto;
            }
        </style>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="cart.css">
        <script>
            function updateTotal(input) {
                var index = input.parentNode.elements['index'].value;
                var quantity = input.value;
                var itemTotal = document.getElementById('item-total-' + index);
                var price = <?php echo $cartItem['price']; ?>;
                itemTotal.innerHTML = 'RM' + (price * quantity).toFixed(2);
                updateCartTotal();
            }

            function updateCartTotal() {
                var total = 0;
                var itemTotals = document.querySelectorAll('[id^="item-total-"]');
                for (var i = 0; i < itemTotals.length; i++) {
                    total += parseFloat(itemTotals[i].innerHTML.substring(1));
                }
                document.getElementById('cart-total').innerHTML = 'RM' + total.toFixed(2);
            }
        </script>
    </head>
    <body>
        <h1>Shopping Cart</h1>
        <?php if (empty($_SESSION['cart'])) : ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
                        <tr>
                            <td><?php echo $cartItem['name']; ?></td>
                            <td><img src="<?php echo $cartItem['imageUrl']; ?>" alt="<?php echo $cartItem['name']; ?>" width="200"></td>
                            <td><?php echo $cartItem['price']; ?></td>

                            <td>
                                <form method="post" class="no-style">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <input type="number" name="quantity[]" value="<?php echo $cartItem['quantity']; ?>" min="1" onchange="updateTotal(this)">
                                </form>
                            </td>
                            <td id="item-total-<?php echo $index; ?>"><?php echo 'RM' . number_format($cartItem['price'] * $cartItem['quantity'], 2); ?></td>

                            </td>
                            <td>
                                <form method="post" action=""class="no-style">
                                    <input type="hidden" name="id" value="<?php echo $cartItem['id']; ?>">
                                    <button type="submit" name="remove" value="<?php echo $index; ?>">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr class="separator">
                            <td colspan="6"></td>
                        </tr>
                    <?php 
                    $index++;
                    endforeach; 
                    ?>
                    <tr>
                        <?php $total = get_cart_total(); ?>
                        <td colspan="3" class="text-right"><h5>Total:</h5></td>
                        <td id="cart-total"><h3><?php echo 'RM' . number_format($total, 2); ?></h5></td>
                        <td></td>
                        <td><a href="orderlist.php"><button type="submit" name="creatorder">Create Order</button></a></td>   
                    </tr>
                </tbody>
            </table>
        <?php endif; ?>
        <a href="foodmenu.php">Continue shopping</a>
    </body>
</html>
