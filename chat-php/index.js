
$(document).ready(function () {
    let currentSelectTable = ""
    let tableName = "";
    $("#noteAddFinalBtn").on('click', function () {
        let chatName = $("#note").val();
        closeForm();
        $.ajax({
            url: 'createTable.php',
            method: "POST",
            data: { chat: chatName },
            success: function (data) {
                if (data == 1) {
                    getAllChatList();
                    console.log("Success Create New Chat Table");
                }
                else if (data == 2) {
                    console.log("Provided Chat Name Already Exists");
                }
                else {
                    console.log("Please Enter Chat Name.");
                }
            }
        });
    });

    //Getting All Chat List (table from DB)
    getAllChatList();

    $("#list").on("click", "li a", function (e) {
        e.preventDefault();
        tableName = $(this).text();
        // console.log(tableName);
        $("#list").css('display', 'none');
        getChatOfCurrTable(tableName);
    });

    $("#goBack").on("click", function (e) {
        e.preventDefault();
        $("#msg-show").css("display", "none");
        $("#list").css('display', 'block');
    });

    $(document).on("click", "#msgSendBtn", function (e) {
        e.preventDefault()
        let msgValue = $("#msgBody").val();
        if(msgValue.length == 0){
            return;
        }
        // console.log(msgValue)
        $.ajax({
            url: 'postMsgInChatTable.php',
            method: 'POST',
            data: {
                msg: msgValue,
                table: tableName
            },
            success: function (data) {
                if (data == 1) {
                    getChatOfCurrTable(tableName);
                }
            }
        });
    })


});


function getAllChatList() {
    $.ajax({
        url: "allChatTable.php",
        method: "GET",
        success: function (data) {
            if (data == 99) {
                $("#list").html("No Chat List Found");
            }
            else {
                $("#list").html(data);
            }
        }
    });
}


function getChatOfCurrTable(tableName) {
    currentSelectTable = tableName;
    $.ajax({
        url: 'getDataOfCurrTable.php',
        method: "POST",
        data: { table: tableName },
        success: function (data) {
            $("#msg-show").html(data);
        }
    });
}



function openForm(e) {
    document.getElementById("note-form").style.display = "flex";
}

function closeForm() {
    $("#note").val("");
    document.getElementById("note-form").style.display = "none";
}