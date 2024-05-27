<?php
    $dataformdb = null;

    $progvar = $dataformdb ?? 0;

    $percentage = $progvar/20*100;

    echo $percentage . "<br>";


    $num1 = 10;
    $num2 = 5;

    echo "<br>";
    var_dump($num1<=>$num2);
    echo "<br>";
    var_dump($num2<=>$num1);
    echo "<br>";
    var_dump($num2+5<=>$num1);
    echo "<br>";

    $obtmarks = 15;
    $maxmarks = 20;

    echo "Max Marks : $maxmarks<br>Obt Marks = $obtmarks<br>";

    $percentage = $obtmarks/$maxmarks*100;

    echo $percentage . "% <br>";

    if($percentage>=40) {
        echo "Status : PASS<br>";
    }else {
        echo "Status : FAIL<br>";
    }
    
    if($percentage>=80) {
        echo "Grade : A+<br>";
    }elseif($percentage>=70) {
        echo "Grade : A<br>";
    }elseif($percentage>=60) {
        echo "Grade : B<br>";
    }elseif($percentage>=50) {
        echo "Grade : C<br>";
    }elseif($percentage>=40) {
        echo "Grade : D<br>";
    }else{
        echo "Grade : F<br>";
    }
?>