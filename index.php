<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="email" placeholder="Email" required=""><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required=""><br>

     	<button type="submit">Log In</button>
        <a href="register.php" class="ca">Create an account</a>
     </form>
</body>
</html>