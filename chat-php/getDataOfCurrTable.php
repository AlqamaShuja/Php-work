<style>
    <?php
        include_once("css/anchor.css");
    ?>
</style>

<?php
    include_once("connection.php");
    if(isset($_POST['table'])){
        $chatName = $_POST['table'];
        $sql = "SELECT * FROM `$chatName`";
        $res = mysqli_query($conn, $sql);
        $output = "<a href='' id='goBack'>Back to Chat List</a> 
                    <h1 class='main-heading'> Chat </h1>";
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){
                $id = $row['id'];
                $sender = $row['sender'];
                $msg = $row['msg'];
                $output .= "<li><span>$id-</span><span>$sender: </span>$msg</li>";
            }
        }
        $output .= "<div id='msg-container'><input type='text' name='msgBody' id='msgBody' />
                    <button id='msgSendBtn'>Send</button></div>
                    ";
                    // <input type='hidden' name='$chatName' id='$chatName' />
        echo $output;
    }

?>

