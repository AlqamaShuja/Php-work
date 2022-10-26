<?php
    session_start();
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
    }
    else{
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Apna Chat</title>
    <style>
        <?php
            include_once("css/anchor.css");
        ?>
    </style>
</head>
<body>
    <div class="container">
        <button id="addNoteChat" onclick="openForm()">Create New Chat</button>
        <a href="logout.php" id="logout">Logout</a>
        <div class="note-form" id="note-form">
            <input type="text" name="note" id="note" placeholder="Enter your Chat Name..">
            <div class="popupBtn">
                <input type="submit" onclick="closeForm()" class="noteCancelBtn" 
                id="noteCancelBtn" value="Cancel">
                <input type="submit" class="noteAddFinalBtn" id="noteAddFinalBtn"
                value="Add to Chat List">
            </div>
        </div>
        <ul id="list">
        </ul>
        <ul id="msg-show">
        </ul>
    </div>
        
    <!-- <script src="jquery-3.6.0.js"></script> -->
    <script src="index.js"></script>
</body>
</html>