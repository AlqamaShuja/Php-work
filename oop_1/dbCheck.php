<?php
    include_once("controller.php");
    $db = new MyDataBase("a_crud");

    $sql = "INSERT INTO `user` VALUES(null, 'usama', 'ali@gmail.com', 'ali')";
    $sql2 = "SELECT * FROM user";
    $result = $db->runQuery($sql2);
    $i=0;
    foreach($result as $row){
        echo $row["name"].'<br>';
    }
    
?>