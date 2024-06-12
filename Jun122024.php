<?php
    $name = $email = $phone = $gender = "";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['sendBtn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone">
        <br><br>
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br><br>
        <input type="submit" value="Send" name="sendBtn" id="sendBtn">
    </form>
    <?php if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['sendBtn'])) {?>
    <div>
        <h2>Output</h2>
        <ul>
            <li><b>Name : </b><?php echo $name?></li>
            <li><b>Gender : </b><?php echo $gender?></li>
            <li><b>Email : </b><?php echo $email?></li>
            <li><b>Contact : </b><?php echo $phone?></li>
        </ul>
    </div>
    <?php
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
    }
    ?>
</body>
</html>