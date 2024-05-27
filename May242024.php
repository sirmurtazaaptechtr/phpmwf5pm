<?php 
// function PPII () {
//     return 22.0/7.0;
// }

// $res = PPII();
// echo $res;

define("COMPANY","Aptech Learning");
const ADDRESS = "435/C/2, PECHS Block 2 Commercial, Tariq Road, Karachi, Sindh, Pakistan.";

$num1 = 64;

echo pi() . "<br>";

echo min(2,1,13,7,16,3,18,5) . "<br>";
echo max(2,1,13,7,16,3,18,5) . "<br>";
echo abs(-22.7) . "<br>";

$num1 = 144;

echo "The square root of $num1 is " . sqrt($num1) . "<br>";

$num1 = 0.64745;

echo round($num1,2) . "<br>";

echo rand(0,9) . "<br>";

echo "<p>" . COMPANY . " is situated at " . ADDRESS . "</p>";

echo __DIR__ . "<br>";
echo __FILE__ . "<br>";

$num = 172;
$result = $num %2 == 0 ? "$num is Even" : "$num is Odd";
echo $result;

?>