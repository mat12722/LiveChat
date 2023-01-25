<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ./loginPage.html');
}

include "son.php";

$query = "select * from chat";
$result = $con->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="livestyle.css">
    <script type="text/javascript" src="./JavaScript"></script>
    <title>Chat</title>
</head>

<body">
    <div class="background"></div>
    <div class="wrap">
        <section class="banner">
            <a id="logoutBtn" href="logout.php">Logout</a>
            <h1>Welcome <?php echo $_SESSION['username']?></h1>
        </section>
        <section class="chat">
            <div class="mainchat" readonly="" name="textdesc" id="mainchat">
                <?php 
                   while ($row = $result->fetch_assoc()) {
                        if (empty($row["img"])) {
                            echo
                            "<p>".
                            $row["Data"]. " ". 
                            $row["name"]. ": ".
                            $row["userMessage"].
                            "</p>";
                        }else {
                            echo
                            "<p>".
                            $row["Data"]. " ".
                            $row["name"]. ": ".
                            $row["userMessage"].
                            "<br>".
                            "<br>". 
                            "<img src='pictures/".$row["img"]."'/>".
                            "</p>";
                        }
                   }
                ?>
            </div>
        </section>
        <script>
        let textarea = document.getElementById("mainchat");
        textarea.scrollTop = textarea.scrollHeight;
        </script>
        <section class="sendMessage">
            <form class="messageForm" action="message.php" method="post" enctype="multipart/form-data">
                <input type="text" id="message" name="message" value="">
                <button type="submit" id="sendBtn" name="send">Send</button>
                <input type="file" name="file" id="file">
                <label for="file" id="filelab">&#128443;</label>
            </form>
        </section>
    </div>
</body>

</html>