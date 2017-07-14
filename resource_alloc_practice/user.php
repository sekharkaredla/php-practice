<?php
session_start();
if(isset($_SESSION['user'])){
  echo "<h1>USER  ".$_SESSION['user']."</h1>";
}
else {
  session_destroy();
  header('Location: index.html');
  die();
}
?>
