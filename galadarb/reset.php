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
    <link rel="stylesheet" href="models/styles.css">
    <title>Reset Password</title>
</head>

<body>
    <div class="login">
        <div class="login-header">
            <div class="h1">Reset</div>
        </div>
        <div class="login-form">
            <div class="center">
                <form id="form">
                    <input id="users" type="text" placeholder="Username" name="users" required>
                    <input id="emails" type="text" placeholder="E-mail" name="emails" required>
                    <input id="quest" type="text" placeholder="Your secret question" name="quest" required>
                    <input id="passwords" type="password" placeholder="Password" name="passwords" required>
                    <input id="passwordre" type="password" placeholder="Repeat password" name="passwordres" required>
                    <button class="btn myButton" onclick="getInput('controllers/update.php')">reset</button>
                    <div id="msg"></div>
                   <?php echo "<font color=white> Back to login!</font>"?><button onclick="login()" class="btn myButton3"> login</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        function getInput(inputSet) {
            event.preventDefault();
            let msg = document.getElementById('msg');
            let form = document.getElementById('form');
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