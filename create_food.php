<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

h1 {
  font-size: 32px;
  margin: 20px 0px;
  text-align: center;
}

form {
  width: 80%;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 4px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  font-size: 16px;
  color: #333;
}

input[type="text"],
input[type="number"],
textarea {
  display: block;
  width: 100%;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 16px;
  color: #333;
}

input[type="file"] {
  display: block;
  margin-top: 10px;
}

input[type="submit"] {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 4px;
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.error {
  color: #ff0000;
  font-weight: bold;
  margin-bottom: 10px;
}

.success {
  color: #00ff00;
  font-weight: bold;
  margin-bottom: 10px;
}
</style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Menu Item</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Create Menu Item</h1>
        <form action="db.php" method="POST" enctype="multipart/form-data">
            <label for="food_id">Food ID:</label>
            <input type="text" id="food_id" name="food_id" required>  

            <label for="food_category">Food Category:</label>
            <input type="text" id="food_category" name="food_category" required>

            <label for="food_name">Food Name:</label>
            <input type="text" id="food_name" name="food_name" required>

            <label for="food_price">Food Price:</label>
            <input type="text" id="food_price" name="food_price" required>

            <label for="food_description">Food Description:</label>
            <textarea id="food_desc" name="food_desc" required></textarea>

            <label for="food_image">Food Image:</label>
            <input type="file" id="food_img" name="food_img" accept=".jpg, .jpeg, .png" required>
<!--            <input type="file" id="food_img" name="food_img" accept=".jpg, .jpeg, .png" required>-->

            <input type="submit" value="Create">
        </form>
    </body>
</html>
