<?php
$conn = new mysqli('localhost','root','pandu123','testdatabase');
if($conn->connect_error){
  die('unable to connect '.$conn->connect_error);
}
 ?>
