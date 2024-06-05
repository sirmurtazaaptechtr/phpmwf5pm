<?php
    declare(strict_types=1);
    function myfun1 () {
        echo "<p>This is first function</p>";
    }
    function myfun2($a, $b) {
        $c = $a + $b;
        echo "<p>$a + $b = $c</p>";
    }
    function myfun3($a, $b) {
        $c = $a + $b;
        return $c;
    }
    function myfun4() {
        return "<p>Hi there !</p>";
    }
    function myfun5 (float $x = 0, float $y = 0) {
        $z = $x + $y;
        echo "<p>$x + $y = $z</p>";
    }

    function myfun6 (int $x, int $y) : float {
        $z = (float)$x / $y;
        return $z;
    }
    myfun1();
    myfun1();
    myfun1();
    myfun2(12,3.5);
    $res = myfun3(10,20);
    echo "<p>The result is : $res</p>";
    echo "<p>The result is : " . myfun3(12,19) . "</p>";
    echo myfun4();
    myfun5(15,4.5);
    $res =  myfun6(5,2);
    var_dump($res);
    myfun5(17);
?>