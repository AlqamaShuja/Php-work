<?php
class MyDataBase {
    private $localhost="localhost", $root="root", $password="";
    private $conn;

    function __construct($db){
        $this->conn = mysqli_connect($this->localhost, $this->root,$this->password,$db);
    }

    function runQuery($query){
        $res = mysqli_query($this->conn, $query);
        $output = array();
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                $output[] = $row;
            }
        }
        return $output;
    }
}



?>