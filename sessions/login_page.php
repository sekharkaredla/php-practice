<?php
session_start();
?>
<html>
<head>
	<title>My Login Page</title>
</head>
<body>
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
USERNAME:<input type="username" name="user"><br/>
PASSWORD:<input type="password" name="pass"><br/>
<input type="submit" name="submit" value="go">
</form>
<?php
if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$password=$_POST['pass'];
	if($username=='sekhar'&&$password=='sekhar123')
	{
		$_SESSION['user']=$username;
		header("Location: start_session.php");
		die();
	}
	else
	{
		session_destroy();
		echo 'LOL';
	}
}
?>
</body>
</html>