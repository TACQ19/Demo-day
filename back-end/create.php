<?php

include "database.php";
$input= file_get_contents('php://input');
$data= json_decode($input, true);
$message =array();
$name=$data['name'];
$vote=$data['vote'];
$img=$data['img'];

$q = mysqli_query($con, "INSERT INTO `pitchs` (`name`,`vote`,`img`) VALUES ('$name',1,'$img')");

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