<?php
session_start();
?>
<html>
<head>
	<title>session test page 2</title>
</head>
<body>
<?php
echo "my car is ".$_SESSION['car']." of color ".$_SESSION['color'];
session_destroy();
?>
</body>
</html>