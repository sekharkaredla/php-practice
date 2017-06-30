<!DOCTYPE html>
<html>
<head>
	<title>post process</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (count($name)==0) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
</body>
</html>