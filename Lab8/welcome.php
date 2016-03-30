<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome</h1>
<?php

$conn = mysql_connect("localhost","root","");
if (!$conn){
	die("Attention no connection".mysql_error());
}
$dbcon = mysql_select_db("iict_students");

if (!$dbcon)
	die("Attention no database selected ".mysql_error());

$sql = "SELECT `ID`, `Name`, `Address`, `DOB` FROM `biodata`";
$res = mysql_query($sql);
if (!$res)
	die("Attention query failed ".mysql_error());

while($row = mysql_fetch_array($res)){
	echo $row['ID']."  ";
	echo $row['Name']."  ";
	echo $row['Address']." ";
	echo $row['DOB']." ";
	echo "<br>";
}


echo "cp1";

?>

</body>
</html>