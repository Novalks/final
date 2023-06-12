<?php
include "../config/db.php";
include "function.php";
$msgs = $_POST['usermsg'];
date_default_timezone_set("europe/riga");
$date =  date("Y-m-d h:i: sa"); 
if(empty($msgs)) {
    echo"Please fill the box";
}
?>