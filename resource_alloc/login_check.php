<?php
session_start();
function test($data){
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  $servername='localhost';
  $username='root';
  $password='pass';
  $database='testdb';
  $conn=new mysqli($servername,$username,$password,$database);
  if($conn->connect_error){
    session_destroy();
    die('connection failed '.$conn->$connect_error);
  }
  $user=test($_POST['name']);
  $pass=test($_POST['pass']);
  $sql="select * from resourcealloc_credentials where username='".$user."'";
  $result=$conn->query($sql);
  $conn->close();
  if($result->num_rows>0){
    $row=$result->fetch_assoc();
    if($row['password']==$pass){
      $_SESSION['user']=$user;
      if($row['is_admin']==1){
        header('Location:admin.php');
        die();
      }
      else{
        header('Location:user.php');
        die();
      }
    }
    else{
      session_destroy();
      header('Location:index.html');
      die();
    }
  }
  else{
    session_destroy();
    header('Location:index.html');
    die();
  }
}
else {
  session_destroy();
  header('Location:index.html');
  die();
}
?>
