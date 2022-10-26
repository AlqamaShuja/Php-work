
<?php
    include_once("connection.php");
    if(isset($_POST['submitBtn'])){
        if($_POST['email'] !=="" && $_POST['password'] !==""){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pass'";
            // $sql = "SELECT * FROM `users`";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $row = mysqli_fetch_assoc($res);
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                header("Location: index.php");
            }else{
                echo "Your Email & Password does not match";
            }
        }else{
            echo "Please enter email & password";
        }
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <form action="login.php" id="loginForm" method="POST">
        <!-- <label for="email"></label> -->
        <input type="text" name="email" class="inp" placeholder="Enter your Email">
        <br>
        <!-- <label for="email"></label> -->
        <input type="password" name='password' class="inp" placeholder="Enter your password">
        <br>
        <input type="submit" id="submitBtn" name="submitBtn" value="Login">
    </form>
</body>
</html>