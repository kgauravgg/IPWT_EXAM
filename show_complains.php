<?php 
require "test.php";

$sql="select * from complain";
$stmnt=$conn->prepare($sql);
if($stmnt->execute())
{
	
	$data=$stmnt->fetchAll();
	echo "<html><body><table>";
	
	for($i=0;$i<count($data);$i++)
	{
		//echo "<tr>";
		echo "<tr><td>Complain ID- ".$data[$i]["id"]."</td></tr>";
		echo "<tr><td>ID Card Number- ".$data[$i]["id"]."</td></tr>";
		echo "<tr><td>Mobile- ".$data[$i]["mob"]."</td></tr>";
		echo "<tr><td>Name- ".$data[$i]["name"]."</td></tr>";
		echo "<tr><td>Massage-  ".$data[$i]["msg"]."</td></tr>";
		echo "<br>";
	}
	echo "</table></body></html>";
}
else
{
	echo "There is Error";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.html"><button>Goto Home</button></a>
</body>
</html>