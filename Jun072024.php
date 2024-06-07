<?php
    function pr ($input) {
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
    function couter () {
        static $count = 0;
        $count++;
        echo "<p>$count</p>";
    }
    function swap(&$val1, &$val2) {
        echo "<p>Inside BF Swanp : $val1,$val2</p>";
        $temp = $val1;
        $val1 = $val2;
        $val2 = $temp;
        echo "<p>Inside AF Swanp : $val1,$val2</p>";
    }    
    function swap2($val1,$val2) {
        global $a,$b;
        echo "<p>Inside BF Swanp : $val1,$val2</p>";
        $temp = $val1;
        $val1 = $val2;
        $val2 = $temp;
        echo "<p>Inside AF Swanp : $val1,$val2</p>";
        $a = $val1;
        $b = $val2;
    }
    $a = 12;
    $b = 13;
    // echo "<p>Outside BF Swanp : $a,$b</p>";
    // swap($a,$b);
    // echo "<p>Outside BF Swanp : $a,$b</p>";
    echo "<p>Outside BF Swanp : $a,$b</p>";
    swap2($a,$b);
    echo "<p>Outside BF Swanp : $a,$b</p>";
    couter();
    couter();
    couter();

    $names = ["Abdul Hadi","Hasnain Ali","Maria Kasmani","Abdul Rehman","Muzammil Mansoor","Ilyan Javed","Muhammad Taha"];
    // $names = Array();
    pr($names);
    echo "<p>" . $names[0] . "</p>";
    foreach($names as $name) {
        echo "<p>Hi $name , how are you?</p>";
    }
    
    $student = ["name" => "Abdul Hadi","dob"=>"10-Jan-2004","gender"=>"male"];
    pr($student);
    echo "<p>" . $student["name"] . "</p>";
    foreach($student as $index=>$value) {
        echo "<p> $index : $value </p>";
    }

    $students = [
        ["name" => "Abdul Hadi","dob"=>"10-Jan-2004","gender"=>"male"],
        ["name" => "Husnain Ali","dob"=>"21-Mar-1999","gender"=>"male"],
        ["name" => "Maria Kasmani","dob"=>"17-Oct-2004","gender"=>"female"],
        ["name" => "Abdul Rehman","dob"=>"09-Jun-2005","gender"=>"male"],
        ["name" => "Muzammil Mansoor","dob"=>"22-Oct-2000","gender"=>"male"],
        ["name" => "Ilyan Javed","dob"=>"14-Nov-2007","gender"=>"male"],
        ["name" => "Muhammad Taha","dob"=>"06-Oct-2003","gender"=>"male"]
    ];

    $students[2]["name"] = "Maria Naeem Kasmani";

    pr($students);

    foreach($students as $std) {
        echo "<p>Dear " . $std["name"] . ", your date of birth is " . $std["dob"] . " and you are a " . $std["gender"] . ".</p>";
    }


?>