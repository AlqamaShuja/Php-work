<?php
    include_once("connection.php");
    if(isset($_POST['table']) && isset($_POST['msg'])){
        $chatName = $_POST['table'];
        $msg = $_POST['msg'];
        session_start();
        $sender = $_SESSION['name'] ? $_SESSION['name'] : "unknown";
        $sql = "INSERT INTO `$chatName`(`id`, `sender`, `msg`) VALUES (null,'$sender','$msg')";
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