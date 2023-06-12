<?php
include "config/db.php";
include "controllers/function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images.jpg" />
    <title>Forum Register</title>
</head>

<body>
    <link rel="stylesheet" href="models/styles.css">

    <body>
        <div class="login">
            <div class="login-header">
                <div class="h1">Register</div>
            </div>
            <div class="login-form">
                <div class="center">
                    <form id="form1">
                        <input id="user" type="text" placeholder="Username" name="users" required>
                        <input id="lastname" type="text" placeholder="Lastname" name="lastnames" required>
                        <input id="email" type="text" placeholder="E-mail" name="emails" required>
                        <input id="quest" type="text" placeholder="Your secret question" name="quest" required>
                        <input id="password" type="password" placeholder="Password" name="passwords" required>
                        <input id="passwordre" type="password" placeholder="Repeat password" name="passwordres" required>
                        <button class="btn myButton" onclick="getInput('controllers/regist.php', 'form1')">register</button>
                        <div id="msg"></div>
                    </form>
                    <font color=white> Back to login! </font><button onclick="login()" class="btn myButton3"> login</button>
                </div>
            </div>
        </div>
        </div>
        <script>
            function getInput(inputSet, formName) {
                event.preventDefault();
                let msg = document.getElementById('msg');
                let form = document.getElementById(formName);
                let formData = new FormData(form);
                let xmlhttp = new XMLHttpRequest();
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

            function myFunction() {
                var x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            function login() {
                window.location.href = "http://into.id.lv/ip19/arnis/galadarb/index.php";
            }
        </script>
    </body>

</html>