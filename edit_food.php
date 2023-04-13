<?php
include 'db.php';

if(isset($_POST['submit'])){
    $id = $_POST['food_id'];
    $category = $_POST['food_category'];
    $name = $_POST['food_name'];
    $price = $_POST['food_price'];
    $description = $_POST['food_desc'];
    
    $sql = "UPDATE bait3343 SET food_category='$category', food_name='$name', food_price='$price', food_desc='$description' WHERE food_id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php");
    }else{
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$id = $_GET['food_id'];

$sql = "SELECT * FROM food_items WHERE food_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu Item</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Edit Menu Item</h2>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['food_id']; ?>">
        
        <label for="food_category">Food Category:</label>
        <input type="text" name="category" value="<?php echo $row['food_category']; ?>"><br>
        
        <label for="food_name">Food Name:</label>
        <input type="text" name="name" value="<?php echo $row['food_name']; ?>"><br>
        
        <label for="food_price">Food Price:</label>
        <input type="text" name="price" value="<?php echo $row['food_price']; ?>"><br>
        
        <label for="food_description">Food Description:</label>
        <textarea name="description"><?php echo $row['food_desc']; ?></textarea><br>
        
        <label for="food_image">Food Image:</label>
        <input type="file" name="food_img" accept=".jpg, .jpeg, .png" value="<?php echo $row['food_img']; ?>"><br>
        
        <input type="submit" name="submit" value="Update">
        <a href="index.php"><input type="button" value="Cancel"></a>
    </form>
</body>
</html>

<?php
    mysqli_close($conn);
?>
