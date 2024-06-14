<?php
    function valid_input ($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    $nameErr = $emailErr = $phoneErr = $genderErr = $websiteErr = "";
    $name = $email = $phone = $gender = $address = $website = "";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['sendBtn'])) {
        if(!empty($_POST['name'])) {
            $name = valid_input($_POST['name']);
        }else {
            $nameErr = "Name is required!";
        }
        if(!empty($_POST['email'])) {
            $email = valid_input($_POST['email']);
        }else {
            $emailErr = "email is required!";
        }
        if(!empty($_POST['phone'])) {
            $phone = valid_input($_POST['phone']);
        }else {
            $phoneErr = "phone is required!";
        }
        if(!empty($_POST['gender'])) {
            $gender = valid_input($_POST['gender']);
        }else {
            $genderErr = "must select gender!";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <style>
        * {
            font-family: cursive;
            box-sizing: border-box;
        }
        .error, .required {
            color: red;
        }
    </style>
</head>
<body>
    <h1>PHP Form Validation Example</h1>
    <form method="post" action="<?php echo valid_input($_SERVER['PHP_SELF']);?>">
        <p class="required">* required field</p>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <span class="required error">* <?php echo $nameErr;?></span>
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <span class="required error">* <?php echo $emailErr;?></span>
        <br><br>
        <label for="website">Website</label>
        <input type="url" name="website" id="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone">
        <span class="required error">* <?php echo $phoneErr;?></span>
        <br><br>
        <label for="phone">Address</label>
        <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <span class="required error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" value="Send" name="sendBtn" id="sendBtn">
    </form>
    <?php if(empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($genderErr) && $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['sendBtn'])) {?>
    <div>
        <h2>Output</h2>
        <ul>
            <li><b>Name : </b><?php echo $name?></li>
            <li><b>Gender : </b><?php echo $gender?></li>
            <li><b>Email : </b><?php echo $email?></li>
            <li><b>Website : </b><?php echo $website?></li>
            <li><b>Address : </b><?php echo $address?></li>
            <li><b>Contact : </b><?php echo $phone?></li>
        </ul>
    </div>
    <?php
    }
    ?>
</body>
</html>