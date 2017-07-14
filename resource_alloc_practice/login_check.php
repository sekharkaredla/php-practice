<?php
session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOGIN CHECK PAGE</title>
  </head>
  <body>
    <?php
    require 'imports/database.php';
    function test($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $user=test($_POST['name']);
      $pass=test($_POST['pass']);
      $sql="select * from resourcealloc_credential where username='".$user."'";
      $result=$conn->query($sql);
      $conn->close();
      if($result->num_rows>0){
        $each_row=$result->fetch_assoc();
          if($each_row['username']==$user && $each_row['password']==$pass){
            $_SESSION['user']=$user;
            if($each_row['is_admin']){
              $_SESSION['admin']=true;
              header('Location: admin.php');
              die();
            }
            else {
              $_SESSION['admin']=false;
              header('Location: user.php');
              die();
            }
          }
          else {
            session_destroy();
            header('Location : index.html');
            die();
          }
      }
    }
    else{
      session_destroy();
      header('Location: index.html');
      die();
    }
     ?>
  </body>
</html>
