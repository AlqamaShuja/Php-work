<?php
    include_once("connection.php");

    $output = "";
    $sql = "SHOW TABLES LIKE '%'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_array($res)){
            $table = $row[0];
            if($table == 'users'){ continue; }
            $output .= "<li><a href=''>$table</a></li>";
        }
        echo $output;
    }
    else{
        echo 99;
    }
?>