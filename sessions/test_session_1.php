<?php
session_start();
?>
<html>
<head>
	<title>session test page 1</title>
</head>
<body>
<?php
$_SESSION['car']='Volvo';
$_SESSION['color']='Red';
echo 'loaded'.'<br/>';
?>
<a href="test_session_2.php">session2</a>
</body>
</html>