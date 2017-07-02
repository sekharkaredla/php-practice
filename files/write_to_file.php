<!DOCTYPE html>
<html>
<head>
	<title>writing to a file</title>
</head>
<body>
<?php
$mahfile=fopen("newfile.txt","w") or die("unable to open the file");
$mytext="sekhar karedla\n";
fwrite($mahfile, $mytext);
$mytext="CBIT";
fwrite($mahfile, $mytext);
fclose($mahfile);
$mahfile=fopen("newfile.txt","r") or die("unable to open the file");
while(!feof($mahfile))
{
	$line=fgets($mahfile);
	echo $line."<br/>";
}
fclose($mahfile);
?>
</body>
</html>