<?php

include "database.php";
$input= file_get_contents('php://input');
$message= array();
$id=$_GET['id'];
$q = mysqli_query($con, "DELETE from `pitchs` WHERE `id`={$id}");

if($q){
    http_response_code(201);
    $message['status'] ="Sucess";
}else{
    http_response_code(422);
    $message['status'] ="error";
}

echo json_encode($message);
echo mysqli_error($con);

?>