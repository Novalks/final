<?php
include "../config/db.php";
include "function.php";

$user = $_POST['users'];
$last = $_POST['lastnames'];
$email = $_POST['emails'];
$quest = $_POST['quest'];
$password = $_POST['passwords'];
$passwordr = $_POST['passwordres'];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo '<font color=white> Password must contain 8 char, 1 Large char, 1 number and 1 symbol';
}else{
if(!empty($user) && !empty($email)){
if($password == $passwordr ){
$sqls ="SELECT user FROM `lietotaji` WHERE user= '$user' OR email ='$email'";
$result = select($sqls,$conn);
if($result){

    echo "Username or email is taken! ";
}else{
$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO `lietotaji` (user, lastname, email, quest, `password`) VALUES ('$user','$last','$email', '$quest', '$password')";

$msg = insert($sql,$conn);
if($msg === true){
    echo "<font color=white> Profile created successfully!";
    }else{
    echo "<font color=white> Failed to create profile please try again!";
    }
}
}else{
echo "<font color=white> The password is not the same please try again!";
}
}else{
    echo "<font color=white> Unable to register because all fields are not filled!";
}
}
?>