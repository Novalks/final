<?php
session_start();
include "../config/db.php";
include "function.php";
          $user = $_POST['user1'];
          $pass = $_POST['pas'];
         
        
          if(!empty($user) && !empty($pass)){
          $sql ="SELECT * FROM `lietotaji` WHERE user='$user'";
          $msg = select($sql,$conn);
          if($msg){
          while($row=$msg->fetch_assoc()){
          if($user = $row['user'] && password_verify($pass, $row['password'])){
          $_SESSION["user"] = $row['user'];
         
          $usersss ="true";
          }else{
          $usersss ="<font color=white> Failed to login! Wrong password or username!";
          }
            }
        }else{
           $usersss ="<font color=white> This user does not exist!";

         }      
      }else{
        $usersss = "<font color=white> All fields are not filled!";
      }
      echo $usersss;
?>