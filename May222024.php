<?php
    $text = "Fizza Haider, Asil Ghaniyah, Abdul Hadi, Maria Kasmani, Muhammad Haqqani, Shameel Abdul Karim, Husnain Ali, Ilyan Javed";
    $arr = [];
    $number = 2.2;
    $num = "";

    define("COMPANY","Aptech Learning");
    const ADDRESS = "435/c/2, PECHS Block 2 Commercial near Liberty Chowk Tariq Road Karachi, Sindh, Pakistan";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $arr = explode(", ",$text);

        echo "<pre>";
        //Use the print_r() function to display the result:
        print_r($arr);
        echo "</pre>";

        echo strpos($text,"Maria") . "<br>";
        echo substr($text,strpos($text,"Maria")) . "<br>";
        echo substr($text,strpos($text,"Maria"),13) . "<br>";

        var_dump (4 * 2.5);

        echo "<br>";
        echo "Max Value of int : " . PHP_INT_MAX . "<br>";
        echo "Min Value of int : " . PHP_INT_MIN . "<br>";
        echo "Size of int : " . PHP_INT_SIZE . "bytes<br>";

        var_dump(is_int($number));
        echo "<br>";
        
        // Cast float to int
        $x = 23465.768;
        $num = (int)$x;
        var_dump($num);
        
        echo "<br>";

        $y = "2.14";
        $num = (float)$y;
        var_dump($num);

        unset($num);

        var_dump($num);

        echo "<p>" . COMPANY . " is located at " . ADDRESS . "<p>";

        echo __FILE__;
        
    ?>
</body>
</html>