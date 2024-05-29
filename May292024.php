<?php
    $ch = 'z';

    switch($ch) {
        case 'a':
        case 'A':
        case 'e':
        case 'E':
        case 'i':
        case 'I':
        case 'o':
        case 'O':
        case 'u':
        case 'U':
            echo "<p>$ch is a vowel</p>";
            break;
        default:
            echo "<p>$ch is a consonent</p>";
            break;
    }

    $age = 21;
    if($age >= 18) {
        echo "<p>You can get DL</p>";
    }

    echo "<p>~~~While loop~~~~</p>";
    $num = 10;
    while ($num < 10) {
        echo "$num<br>";
        $num ++;
    }
    echo "<p>~~~For loop~~~~</p>";
    for($num = 10;$num < 10;$num ++) {
        echo "$num<br>";
    }
    echo "<p>~~~DO-While loop~~~~</p>";    
    $num = 10;
    do{
        echo "$num<br>";
        $num ++;
    }while($num < 10);

    $names = ["Fizza","Abdul","Hasnain","Maria","Shameel","Muhammad"];

    echo "<pre>";
    print_r($names);
    echo "</pre>";

    $index = 0;
    while($index < count($names)) {
        echo "<p>Hi " . $names[$index] . ", how are you?</p>";
        $index ++;
    }

    for($index=0;$index<count($names);$index++) {
        echo "<p>Hi " . $names[$index] . ", how are you?</p>";
    }

    foreach($names as $name) {
        echo "<p>Hi $name, how are you?</p>";
    }

    $st = 21;
    $ed = 31;

    for($x=$st;$x<=$ed;$x++) {        
        echo $x . "<br>";
    }
    for($x=$st;$x<=$ed;$x++) {
        if($x%2 == 0) {            
            echo $x . "<br>";
        }
    }
    for($x=$st;$x<=$ed;$x++) {
        if($x%2 == 0) {
            continue;
        }
        echo $x . "<br>";
    }

    
?>