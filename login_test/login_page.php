<?php
session_start();
?>
<html>
<head>
	<title>My Login Page</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
USERNAME:<input type="username" name="user"><br/>
PASSWORD:<input type="password" name="pass"><br/>
<input type="submit" name="submit" value="go">
</form>
<?php
if(isset($_POST['submit']))
{
	$username=test_input($_POST['user']);
	$password=test_input($_POST['pass']);
  $_SESSION['user']=$username;
  $_SESSION['pass']=$password;
	header('Location: check_from_db.php');
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html>
