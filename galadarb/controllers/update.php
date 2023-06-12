<?php
include "../config/db.php";
include "function.php";

    $user = $_POST['users'];
    $email = $_POST['emails'];
    $quest = $_POST['quest'];
    $password = $_POST['passwords'];
    $passwordr = $_POST['passwordres'];
    if(!empty($user) && !empty($email) && !empty($quest)){
    if($password == $passwordr ){
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $sql3 = "UPDATE lietotaji SET  `password`='$pass' WHERE user='$user' AND email='$email' AND quest='$quest' ";
     $msg = insert($sql3,$conn);
     if($msg === true){
     $updat = "<font color=white> Dati atjauninats ";
     }else{
     $updat = "<font color=white> Neizdevas atjauninat ";
     }
    }else{
        echo "<font color=white> Password not same!";
    }
    }else{
        echo "<font color=white> Unable to register because all fields are not filled!";
    }

?>