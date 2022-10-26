<?php 
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
            Access-Control-Allow-Methods, Authorization, X-Requested-With');

    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['uid'];
    $name = $data['uname'];
    $email = $data['uemail'];
    $password = $data['upassword'];


    include_once("connection.php");
    $sqlQuery = "UPDATE `user` SET `name`='$name', `email`='$email', `password`='$password' WHERE id='$id'";

    if(mysqli_query($conn, $sqlQuery)){
        echo json_encode(array(
            'message' => "Updated Successfully",
            'status' => true        
        ));
    }else {
        echo json_encode(array(
            'message' => "Can't Update in DB",
            'status' => false
        ));
    }

?>