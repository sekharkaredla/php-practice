<?php
$conn = new mysqli('localhost','root','pandu123','testdb');
if ($conn->connect_error)
{
  echo 'connection error '.$conn->connect_error;
  die();
}
$sql='select * from testtable';
$result=$conn->query($sql);
if ($result->num_rows>0){
  while ($row=$result->fetch_assoc())
  {
    print_r($row);
    echo "<br/>";
  }
}
$conn->close();
 ?>
