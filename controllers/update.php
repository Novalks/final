<?php
include "../config/db.php";
include "function.php";

    $user = $_POST['users'];
    $email = $_POST['emails'];
    $quest = $_POST['quest'];
    $password = $_POST['passwords'];

    $pass = password_hash($password, PASSWORD_DEFAULT);
    $sql3 = "UPDATE lietotaji SET  `password`='$pass' WHERE user='$user' AND email='$email' AND quest='$quest' ";
     $msg = insert($sql3,$conn);
     if($msg === true){
     $updat = "<font color=white> Dati atjauninats ";
     }else{
     $updat = "<font color=white> Neizdevas atjauninat ";
     }
?>