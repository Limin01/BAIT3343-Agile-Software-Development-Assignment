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
                        <tr>
                            <td>P001</td>
                            <td>Pizza</td>
                            <td>Seafood Pizza</td>
                            <td>18.00</td>
                            <td>Seafood pizza is a type of pizza that is topped with various types of seafood, such as shrimp, calamari, clams, mussels, and sometimes even fish. It is typically made with a tomato-based sauce and mozzarella cheese, but can also include other ingredients like garlic, onions, peppers, and herbs. Seafood pizza is often associated with coastal regions and is a popular option for those who enjoy the taste of seafood and pizza together.</td>
                            <td><img src="images/f1.png" alt="Seafood Pizza" class="food-image"></td>
                            <td>
                                <a href="edit_food.php" class="edit-btn">Edit</a>
                                <a href="delete_food.php" class="delete-btn">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>