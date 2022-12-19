<html>
<link rel="shortcut icon" type="image/x-icon" href="images.jpg" />
<body>
        <div class="top">
    <?php 
    session_start();
    echo "<font color=white> Hello! ". $_SESSION['user'];
    ?>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a ><button onclick="help()" class="btn myButton4">Help</button></a>
                    <a ><button onclick="topic()" class="btn myButton4">New topic</button></a>
                    <a ><button onclick="ticket()" class="btn myButton4">New ticket</button></a>
                </div>
        </div>
        <button onclick="passFunction()" class="btn myButton4 ">Logout</button>
    <link rel="stylesheet" href="models/styles.css">
    <title>Home</title>
    </div>
    <div class="box">
    <input class="inputbox" type="text" id="text" name="text">
    <input class="submit" type="submit" name="users" value="submit">
    </div>
    <div class="box1">
        <div class="box2 col"> Announcements
            <div></div>
        </div>
            <div class="box3">Topics</div>
                    <div class="box4">Last Topic</div>  
                    <div>
</div>
    <script>
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