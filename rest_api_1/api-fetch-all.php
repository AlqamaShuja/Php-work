<?php 
    header('Content-Type: application/json');
    header('Acess-Control-Allow-Origin: *');
    include_once("connection.php");
    $sqlQuery = "SELECT * FROM user";
    $result = mysqli_query($conn, $sqlQuery);

    if(mysqli_num_rows($result) > 0){
        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output, JSON_PRETTY_PRINT);
    }else {
        // echo "<h2>No Record Found..!!</h2>";
        echo json_encode(array(
            'message' => "No Record Found",
            'status' => false        
        ));
    }



?>