<?php 
    session_start(); 
    include "db_conn.php";

    if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['contactNum']) 
        && isset($_POST['address']) && isset($_POST['password'])) {

	function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
	$name = validate($_POST['name']);
	$contactNum = validate($_POST['contactNum']);
        $add = validate($_POST['address']);
        $pass = validate($_POST['password']);
	
        $user_data = 'email='. $email. '&name='. $name;

        if (empty($email)) {
            header("Location: register.php?error=Email is required&$user_data");
	    exit();
	}
        else if (empty($name)) {
            header("Location: register.php?error=Name is required&$user_data");
	    exit();
	}
        else if (empty($contactNum)) {
            header("Location: register.php?error=Contact number is required&$user_data");
	    exit();
	}
        else if (empty($add)) {
            header("Location: register.php?error=Address is required&$user_data");
	    exit();
	}
        else if(empty($pass)) {
            header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}
        
//	else if($pass !== $re_pass){
//        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
//	    exit();
//	}

	else {  // hashing the password
            $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$email' "; 
            $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) > 0) {
		header("Location: register.php?error=The username is taken, please try another&$user_data");
	        exit();
            }
            else {
                $sql2 = "INSERT INTO users(email, name, contactNum, address, password) VALUES('$email', '$name', '$contactNum', '$add', '$pass')";
                $result2 = mysqli_query($conn, $sql2);
                
                if ($result2) {
                    header("Location: register.php?success=Your account has been created successfully");
                    exit();
                }
                else {
                    header("Location: register.php?error=Unknown error occurred&$user_data");
		    exit();
                }
            }
	}
	
    }
    else {
	header("Location: signup.php");
	exit();
    }