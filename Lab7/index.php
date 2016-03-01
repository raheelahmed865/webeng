<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Write a palindrome checker program in PHP</h1>
palindromes are text like
LEVEL
POPOP
BOB
CIVIC


<h1>PHP Learning Assignment: </h1>

<h2>1.Wordpress</h2>
2.Joomla
3.PHPBB
4.Drupal
5.Moodle
6.SugarCRM
7.Magento
8.TestLink
9.Zurmo
10.PrestaShop
11.Osclass
12.ProcessWire
13.OrangeHRM
14.




<?php

$i = 0;
$str = "some string";
for ($i=0;$i<strlen($str);$i++)
echo $str[$i];

?>

<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);


$planes = array("Fighter", "Jet", "Boeing");
echo "I like " . $planes[0] . ", " . $planes[1] . " and " . $planes[2] . ".";


$city = array("Alan"=>"NY", "Mark"=>"CA", "Ali"=>"IL");
echo "Alan lives  in" . $city['Alan'] . ".";
foreach($city as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


?>



</body>
</html>



