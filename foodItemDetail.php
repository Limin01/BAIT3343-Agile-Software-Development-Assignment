<?php
require_once 'foodmenu.php';

// Check if an item ID was provided in the URL
if (isset($_GET['id'])) {
    $itemId = $_GET['id'];

    // Find the item with the specified ID in the menu
    $item = null;
    foreach ($foodMenu as $menuItem) {
        if ($menuItem->id == $itemId) {
            $item = $menuItem;
            break;
        }
    }

    // If the item was found, display its details
    if ($item !== null) {
        $pageTitle = $item->name;
        $pageContent = "<h2>" . $item->name . "</h2>";
        $pageContent .= "<p>" . $item->toString() . "</p>";
    } else {
        $pageTitle = "Error";
        $pageContent = "<p>Item not found.</p>";
    }
} else {
    $pageTitle = "Error";
    $pageContent = "<p>No item ID provided.</p>";
}

// Output the HTML page
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
        }
        h2 {
            color: #FF4500;
            text-align: center;
        }
        p {
            font-size: 18px;
            color: #333;
            margin: 10px 0 0;
        }
    </style>
</head>
<body>
    <?php echo $pageContent; ?>
</body>
</html>
