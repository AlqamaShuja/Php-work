<?php 
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Acess-Control-Allow-Methods: DELETE');
    header('Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,
            Acess-Control-Allow-Methods, Authorization, X-Requested-With');

    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['uid'];

    include_once("connection.php");
    $sqlQuery = "DELETE FROM `user` WHERE id='$id'";

    if(mysqli_query($conn, $sqlQuery)){
        echo json_encode(array(
            'message' => "Deleted Successfully",
            'status' => true   
        ));
    }else {
        echo json_encode(array(
            'message' => "Can't Deleted from Database",
            'status' => false
        ));
    }


?>