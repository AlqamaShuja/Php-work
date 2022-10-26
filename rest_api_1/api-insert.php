<?php 
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
            Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // {"id": "1"}
    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['uname'];
    $email = $data['uemail'];
    $password = $data['upassword'];


    include_once("connection.php");
    $sqlQuery = "INSERT INTO `user`(`id`, `name`, `email`, `password`) VALUES (null, '$name', '$email', '$password')";

    if(mysqli_query($conn, $sqlQuery)){
        echo json_encode(array(
            'message' => "Insert Successfully",
            'status' => true        
        ));
    }else {
        echo json_encode(array(
            'message' => "Can't inserted in DB",
            'status' => false        
        ));
    }

?>