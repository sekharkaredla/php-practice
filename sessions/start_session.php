<?php
session_start();
?>
<html>
<head>
	<title>session started</title>
</head>
<body>
<?php
echo "WELCOME ".$_SESSION['user'];
session_destroy();
?>
</body>
</html>