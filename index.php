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
    <title>Forum Login</title>
</head>

<body>
    <link rel="stylesheet" href="models/styles.css">
    <body>
        <div class="login">
            <div class="login-header">
                <div class="h1">Login</div>
            </div>
            <div class="login-form">
                <div class="center">
                    <form id="form" class="login">
                        <input type="text" name="user1" placeholder="User or E-mail" required autocomplete="off">
                        <input type="password" name="pas" placeholder="Password" required autocomplete="off">
                        <button class="btn myButton" onclick="getInput('controllers/login.php', 'form')">Login</button>
                        <div id="msg"></div>
                        <div class="space">
                            <button onclick="passFunction()" class="btn myButton1">Forgot password</button>
                            <button onclick="register()" class="btn myButton2">Register</button>
                        </div>
                    </form>
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
                            window.location.replace("home.php");
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

            function register() {
                window.location.href = "http://into.id.lv/ip19/arnis/galadarb/registers.php";
            }

            function passFunction() {
                window.location.href = "http://into.id.lv/ip19/arnis/galadarb/reset.php";
            }
        </script>
    </body>

</html>