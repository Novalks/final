<?php
include "config/db.php";
include "controllers/function.php";
session_start();
 ?>
<html>
<link rel="shortcut icon" type="image/x-icon" href="images.jpg" />
<title>New Topic</title>
<link rel="stylesheet" href="models/styles.css">
<button onclick="back()" class="btn myButton4 ">Back!</button>
<body>
    <link rel="stylesheet" href="models/style1.css">
            <div id="wrapper">
            <div id="menu">
                <div id="black">  New Topic </div>
                <div id="blacks">
                </div>
                </div>
                <form id="message">
                    <input id="usermsg" type="text" placeholder="Topic" name="topic" >
                    <input id="usermsg" type="text" placeholder="Question" name="usermsg" >
                    <button class="btn myButton" onclick="getInput('topic.php', 'message')" >Send</button>
                    <div id="msg"></div>
                </form>
                </div>
    </body>
    <?php
                    if(empty($_POST['topic'])){
                    }else{
                    $post = $_POST['topic'];
                    }
                    if(empty($_POST['usermsg'])){
                    }else{
                    $msgs = $_POST['usermsg'];
                    }
                    date_default_timezone_set("europe/riga");
                    $date =  date("Y-m-d h:i: sa"); 
                    if(empty($msgs)) {
                    }else{
                    $sql = "INSERT INTO post (post , user, `text`, `date`) VALUES ('$post',' ".$_SESSION['user'] ." ' , '$msgs' , '$date')";
                    $msg = insert($sql,$conn);
                }
                ?>
    <script>
         function getInput(inputSet, formName) {
                event.preventDefault();
                let msg = document.getElementById('msg');
                let form = document.getElementById(formName);
                let formData = new FormData(form);
                let xmlhttp = new XMLHttpRequest();
                window.location.replace("topic.php");
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
    function back() {
                    window.location.href = "http://into.id.lv/ip19/arnis/galadarb/home.php";
                }
    </script>