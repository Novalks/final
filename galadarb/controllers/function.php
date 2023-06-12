<?php
function select($sql, $conn){
    $msg = $conn->query($sql);
    if($msg->num_rows > 0){
    return $msg;
    }else{
    return false;
    }

}

function insert($sql,$conn){
    if($conn->query($sql)===TRUE){
        return true;
   }else{
        return false;
}
}

?>