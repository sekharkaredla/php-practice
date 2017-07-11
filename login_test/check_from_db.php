<?php
session_start();
$conn = new mysqli('localhost','root','pass','sek091');
if ($conn->connect_error){
  echo $conn->connect_error;
  die();
  session_destroy();
}
$sql='select * from credentials';
$result=$conn->query($sql);
if ($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    if ($row['username']==$_SESSION['user']&&$row['password']==$_SESSION['pass'])
    {
      header('Location: success.html');
      die();
    }
  }
}
echo "<h1>INVALID PASSWORD</h1>";
session_destroy();
 ?>
