<!DOCTYPE html>
<html>
<head>
	<title>Date and Time</title>
</head>
<body>
<?php
date_default_timezone_set("Asia/Kolkata");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l")."<br/>";
date_default_timezone_set("America/New_York");
echo "Full current time in america is : ".date("h : i : sa     Y -- m-- d")."<br/>";
$nowtime=mktime(1,1,1,1,1,1);//hour minute second month day year
echo $nowtime."<br/>";
echo "the generated time is : ".date("h i sa Y m d",$nowtime)."<br/>";
echo date("Y month d",time());
?>
</body>
</html>