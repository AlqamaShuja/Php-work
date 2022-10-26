<?php
    include_once("connection.php");
    if(isset($_POST['chat'])){
        $chatName = $_POST['chat'];
        $i = rand(1, 4000);
        $chatName = "$i-".$chatName;
        // IF NOT EXISTS
        $sql = "CREATE TABLE `$chatName`(
            `id` INT(6) AUTO_INCREMENT PRIMARY KEY,
            `sender` VARCHAR(255),
            `msg` VARCHAR(1000)
        )";
        if(mysqli_query($conn, $sql)){
            echo 1;
        }else{
            echo 2;
        }
        
    }
    else{
        return 3;
    }

?>