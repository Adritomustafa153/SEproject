<?php
session_start();
include("db_connect.php");

if (isset($_POST['login'])) {

    // username and password sent from form  
    $name = $_POST['name'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($password)) {
        $sql = "SELECT d_id FROM delivery_man WHERE dm_name = '$name' AND password = $password;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION["uid"] = $row['d_id'];
            header("location: dhome.html");
            exit();
        } else {
            
            echo '<script>alert(" Entar a valid username & password")</script>';
        }
    } else {
        echo "<h3>Please enter username or password<h3>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delivery man | Login</title>
    <link rel="stylesheet" type="text/css" href="lp.css">
</head>

<body>

    <div class="login-section">
        <div class="form">
            <h1>Dhuye Daw Delivery man</h1>
            <form method="post" action="login.php">
                <span class="emailS">
                    <label for="email_n">Enter Your name</label><br>
                    <input type="text" id="email" name="name" placeholder="Name"><br>
                </span>
                <span class="passwordS">
                    <label for="pass">Enter Your Password</label><br>
                    <input type="Password" id="pass" name="password" placeholder="Password"><br>
                </span>
                <button class="btn" name="login">Log In</button>
            </form>

            <p class="forgot-password"><a href="#">Forgot Passwprd?</a> </p>

            <p class="create-new"><a href="create.php">Create New Account</a></p>
        </div>

    </div>

</body>

</html>