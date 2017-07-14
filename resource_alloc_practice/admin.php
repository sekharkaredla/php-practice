<?php
session_start();
if(isset($_SESSION['user'])){
  echo "<h1>ADMIN</h1>";
}
else {
  session_destroy();
  header('Location: index.html');
  die();
}
?>
