<?php

include "database.php";
$data=array();
$q = mysqli_error($con,"SELECT * FROM `pitchs`");

while($row = mysqli_fetch_object($q)){
    $data[]=$row;
}
echo json_encode($data);
echo mysqli_error($con);

?>