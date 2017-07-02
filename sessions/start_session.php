<?php
session_start();
?>
<html>
<head>
	<title>session started</title>
</head>
<body>
<?php
echo "WELCOME ".$_SESSION['user']."<br/>";
print_r($_SESSION);
session_destroy();
?>
</body>
</html>