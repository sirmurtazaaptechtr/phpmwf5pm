<?php
// lib
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

// variables
$name = $email = "";

// main code
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
}

pr($_POST);
pr($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo test_input($_SERVER['PHP_SELF'])?>" method="post">
        Name :<input type = "text" name = "name" >
        E-mail:<input type = "text" name = "email">
        <input type="submit" value="send" name="submitBtn">

    </form>
    <?php
    if(isset($_POST['submitBtn'])) { ?>
    <h2>Output</h2>
    <ul>
        <li><?php echo $name?></li>
        <li><?php echo $email?></li>
    </ul>
    <?php } ?>
</body>
</html>