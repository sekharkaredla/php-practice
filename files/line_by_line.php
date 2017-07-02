<!DOCTYPE html>
<html>
<head>
	<title>line by line file read</title>
</head>
<body>
<?php
$mahfile=fopen('tempfile.txt', 'r') or die('unable to open file');
// Ouptut one line until end-of-file
while(feof($mahfile)==false)
{
	$line=fgets($mahfile);
	echo $line,"<br/>";
}
fclose($mahfile);
$myfile = fopen("tempfile.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>
</body>
</html>