<?php
include "config/db.php";
include "controllers/function.php";
 ?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" type="image/x-icon" href="images.jpg" />
<body>
<link rel="stylesheet" href="models/styles.css">
    <div class="top">
        <?php 
        session_start();
        echo "<font color=white> Hello! ". $_SESSION['user'];

        ?>
            <button onclick="passFunction()" class="btn myButton4 ">Logout</button>
            <button onclick="help()" class="btn myButton4">Help</button>
            <button onclick="topic()" class="btn myButton4">New topic</button>
        <title>Home</title>
    </div>
    <body>
    <link rel="stylesheet" href="models/style1.css">
            <div id="wrapper">
                <div id="menu">
                <div id="black">  Live Chat </div>
                <div id="blacks">
                    <?php
                    date_default_timezone_set("europe/riga");
                    echo"Today is "  . date("Y-m-d h:i:sa"). "<br>"; 
                    ?>
                </div>
                </div>
                <div id="chatbox">
                    <div id ="black">
                    <?php
                    $sql1 ="SELECT  `text`, `date` , user FROM `chat`";
                    $result = select($sql1,$conn);
                    while ($row = $result->fetch_assoc()) {
                        echo $row['user']. ": [". $row['date']. "] : ". $row['text']."<br>";
                    }
                    ?>
                    </div>
                </div>
                <form id="message">
                    <input id="usermsg" type="text" placeholder="Hello" name="usermsg" >
                    <button class="btn myButton" onclick="getInput('home.php', 'message')" >Send</button>
                    <div id="msg"></div>
                </form>
            </div>
    </body>
    <?php
     if(empty($_POST['usermsg'])){
     }else{
     $msgs = $_POST['usermsg'];
     }
     date_default_timezone_set("europe/riga");
     $date =  date("Y-m-d h:i: sa"); 
     if(empty($msgs)) {
     }else{
     $sql = "INSERT INTO `chat` (user , `text`, `date`) VALUES (' ".$_SESSION['user'] ." ' , '$msgs' , '$date')";
     $msg = insert($sql,$conn);
     }   
    ?>
    <div class="box1">
        <div class="box2 "> Creator<br>
        <?php
                    $sql2 ="SELECT  user  FROM post";
                    $result = select($sql2,$conn);
                   while ($row = $result->fetch_assoc()) {
                       echo $row['user']."<br>";
                    }
                    ?>
        </div>
            <div class="box3">Topics<br>
            <?php
                    $sql2 ="SELECT  post  FROM post";
                    $result = select($sql2,$conn);
                   while ($row = $result->fetch_assoc()) {
                       echo $row['post']."<br>";
                    }
                    ?>
            </div>
                    <div class="box4">Text<br>
                    <?php
                    $sql3 ="SELECT  `text`  FROM post";
                    $result = select($sql3,$conn);
                   while ($row = $result->fetch_assoc()) {
                       echo $row['text']."<br>";
                    }
                    ?>
                </div>  
                    <div>
</div>
    <script>
         function getInput(inputSet, formName) {
                event.preventDefault();
                let msg = document.getElementById('msg');
                let form = document.getElementById(formName);
                let formData = new FormData(form);
                let xmlhttp = new XMLHttpRequest();
                window.location.replace("home.php");
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText === "true") {
                            window.location.replace("index.php");
                        } else {
                            msg.innerHTML = this.responseText;
                        }
                    }
                };
                xmlhttp.open("POST", inputSet, true);
                xmlhttp.send(formData);
            }
  
    function passFunction() {
                    window.location.href = "http://into.id.lv/ip19/arnis/galadarb/index.php";
                }
    function help() {
                    window.location.href = "http://into.id.lv/ip19/arnis/galadarb/help.php";
                }
    function ticket() {
                    window.location.href = "http://into.id.lv/ip19/arnis/galadarb/ticket.php";
                }
    function topic() {
                    window.location.href = "http://into.id.lv/ip19/arnis/galadarb/topic.php";
                }
    </script>
</body>

    
</html>