<?php 
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    // {"id": "1"}
    $data = json_decode(file_get_contents('php://input'), true);
    $userId = $data['uid'];


    include_once("connection.php");
    $sqlQuery = "SELECT * FROM user WHERE id=$userId";
    $result = mysqli_query($conn, $sqlQuery);

    if(mysqli_num_rows($result) > 0){
        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);
    }else {
        // echo "<h2>No Record Found..!!</h2>";
        echo json_encode(array(
            'message' => "No Record Found",
            'status' => false        
        ));
    }

?>