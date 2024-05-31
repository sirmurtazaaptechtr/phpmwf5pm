<?php
$op = 3;

$num1 = 10;
$num2 = 3;

switch($op) {
    case 1:
        $res = $num1+$num2;
        echo "<p>$num1 + $num2 = $res</p>"; 
    break;
    case 2:
        $res = $num1-$num2;
        echo "<p>$num1 - $num2 = $res</p>";
    break;
    case 3:
        $res = $num1*$num2;
        echo "<p>$num1 x $num2 = $res</p>";
    break;
    case 4:
        $res = round($num1/$num2,2);
        echo "<p>$num1 / $num2 = $res</p>";
    break;
    default:
        echo "Invalid Choice!";
    break;
}

/*
1. Input the starting and ending values of the range (start, end).
2. For each number i from start to end:
     a. Set is_prime to true initially.
     b. If i is less than 2, continue to the next iteration.
     c. For each number j from 2 to the square root of i:
          i. If i is divisible evenly by j, set is_prime to false and break the loop.
     d. If is_prime is still true, print i as a prime number.
3. End
*/
$start = 31;
$end = 51;

for($target = $start; $target <= $end; $target ++) {
    $is_prime = true;
    for($divisor = 2; $divisor < $target; $divisor ++) {
        if($target % $divisor == 0) {
            $is_prime = false;
            break;
        }
    }
    if($is_prime) {
        echo "<p>$target</p>";
    }
}

?>