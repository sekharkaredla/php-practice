<!DOCTYPE html>
<html>
<head>
	<title>globals</title>
</head>
<body>
<?php
$x=10;
function func1(){
	global $x;
	echo $x;
}
function func2(){
	echo $GLOBALS['x'];
}
func1();func2();
?>
</body>
</html>