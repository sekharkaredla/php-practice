<!DOCTYPE html>
<html>
<head>
	<title>factorial and class concept</title>
</head>
<body>
<?php
class Process{
	function Process($x){
		$this->result=1;
		for($k=1;$k<=$x;$k=$k+1)
			$this->result=$this->result*$k;
	}
}
$object=new Process(5);
#$object.get_fact(5);
echo $object->result;
?>
</body>
</html>