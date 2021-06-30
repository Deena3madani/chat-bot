<?php 

include_once('connection.php'); 


$v=(String) $_POST['v'];

$sql="UPDATE Arm_base SET base_direction = '$v' WHERE id= 1 ";

($conn->query($sql));


include "index.html";

?>