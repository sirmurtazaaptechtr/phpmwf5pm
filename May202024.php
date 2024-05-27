<?php
    $title = "Welcome to My WebSite";
    $center = "Aptech Learning";
    $course = "Php";
    $teacher = "Syed Murtaza Hussain";
    $i = -17;
    $f = 3.14;
    $b = true;
    $name = "Abdul Hadi";
    $data = [-17,3.14,true,"Abdul Hadi"];
    $NoVal = NULL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1><?php echo $title;?></h1>

    <?php
        echo "<p>I am learning $course at $center by $teacher</p>";
        echo '<p>I am learning $course at $center by $teacher</p>';
        echo "<pre>";
        var_dump($i);
        echo "<br>";
        var_dump($f);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($name);
        echo "<br>";
        print_r($data);
        echo "<br>";
        var_dump($NoVal);
        echo "<br>";
        echo "</pre>";

        $len = strlen($title);
        $wc = str_word_count($title);
        $pos = strpos($title,"to");
        $nameUC = strtoupper($name);
        $nameLC = strtolower($name);

        echo "<p>\"$title\" has $len characters in it.</p>";
        echo "<p>\"$title\" has $wc words in it.</p>";
        echo "<p>\"to\" in \"$title\" is at $pos position.</p>";
        echo "$name, $nameUC, $nameLC";

        echo "<p>" . str_replace("Abdul","Mr.",$name) . "</p>";

        echo "<p>" . strrev($name) . "</p>";

        $text = "      Ali Raza       ";
        echo "<pre>";
        echo $text;
        echo "<br>";
        echo trim($text);
        echo "</pre>";

        $firstName = "Fizza";
        $lastName = "Haider";


        echo "<p>$lastName, $firstName<p>";
        echo "<p>" . $lastName . ", " . $firstName . "</p>";

    ?>
  
    
</body>
</html>