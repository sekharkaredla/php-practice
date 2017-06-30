<!DOCTYPE html>
<html>
<head>
	<title>associative array or dictionary</title>
</head>
<body>
<?php
$score = array('91' =>20 ,'92' => 19,'93' => 18 );
echo "<h1>";
echo $score['91'],'<br/>';
echo $score['92'],'<br/>';
echo $score['93'],'<br/>';
foreach ($score as $roll => $marks) {
	echo $roll,' got ',$marks,'<br/>';
}
echo "</h1>";
?>
</body>
</html>