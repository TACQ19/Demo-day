<?php 
header('Acess-control-Allow-Origin: *');
header('Acess-control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Acess-control-Allow-Headers: Token, Content-Type');
header('Acess-control-Allow-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type:text/plain');
$con = mysqli_connect("localhost", "root", "", "demo_day") or die("could not connect DB");
?>