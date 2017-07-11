<?php
session_start();
?>
<html>
<head>
    <title>USER PAGE</title>
</head>
<body>
<h1>USER</h1>
<?php
if(!$_SESSION['user']){
  header('Location:index.html');
  die();
}
$user=$_SESSION['user'];
echo '<h1>'.$user.'</h1>';
$servername='localhost';
$username='root';
$password='pass';
$database='testdb';
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
  die('connection error '.$conn->connect_error);
}
$sql='select * from resourcealloc_resources';
$result=$conn->query($sql);
$conn->close();
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo "<h3>";
    print_r($row);
    echo "<h3>";
  }
}
?>
</body>
</html>
