<!DOCTYPE html>
<html>
<head>
	<title>Read the file in php</title>
</head>
<body>
<?php
echo readfile('tempfile.txt'),"<br/><br/>";
$mahfile=fopen('tempfile.txt', 'r');
echo $mahfile."<br/>";
fread($mahfile, filesize('tempfile.txt'));
fclose($mahfile);
?>
</body>
</html>