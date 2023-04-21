<?php
require_once("server.php");
$email = $_SESSION['email'];
$findresult = mysqli_query($db, "SELECT * FROM users WHERE email= '$email'");
if ($findresult && mysqli_num_rows($findresult) > 0) {
    $results = mysqli_fetch_assoc($findresult);
    $username = $results['username'];
    $fname = $results['fname'];
    $lname = $results['lname'];
    $email = $results['email'];
    $image = $results['image'];
} else {
    $username = "";
    $fname = "";
    $lname = "";
    $email = "";
    $image = "";
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <title> My Account </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-6">
                    <div class="login_form">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-6"> 
                                <?php if (isset($_GET['profile_updated'])) {
                                    ?>
                                    <div class="successmsg">Profile saved ..</div>
                                <?php } ?>
                                <?php if (isset($_GET['password_updated'])) {
                                    ?>
                                    <div class="successmsg">Password has been changed...</div>
                                <?php } ?>
                                <center>
                                    <?php
                                    if ($image == NULL) {
                                        echo '<img src="https://technosmarter.com/assets/icon/user.png">';
                                    } else {
                                        echo '<img src="images/' . $image . '" style="height:80px;width:auto;border-radius:50%;">';
                                    }
                                    ?> 

                                    <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
                                </center>
                            </div>
                            <div class="col"><p><a href="logout.php"><span style="color:red;">Logout</span> </a></p>
                            </div>
                        </div>

                        <table class="table">
                            <tr>
                                <th>First Name </th>
                                <td><?php echo $fname; ?></td>
                            </tr>
                            <tr>
                                <th>Last Name </th>
                                <td><?php echo $lname; ?></td>
                            </tr>
                            <tr>
                                <th>Username </th>
                                <td><?php echo $username; ?></td>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <td><?php echo $email; ?></td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-6">
                                <a href="edit-profile.php"><button type="button" class="btn btn-warning">Edit Profile</button></a>
                            </div>
<!--                            <div class="col-sm-6">
                                <a href="change-password.php"><button type="button" class="btn btn-warning">Change Password</button></a>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div> 
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
