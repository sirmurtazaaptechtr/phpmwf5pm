<?php
    $conn = mysqli_connect("localhost","root","","jun242024_db");
    if($conn) {
        echo "database connected successfully!";
    }
    function pr($input) {
        echo "<pre>";
        print_r($input);
        echo "</pre>";        
    }
    function safe_input ($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST['name'])) {
            $nameErr = "* Name is required";
        }else {
            $name = safe_input($_POST['name']);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "* Only letters and white space allowed";
            }
        }

        if(empty($_POST['email'])) {
            $emailErr = "* email is required";
        }else {
            $email = safe_input($_POST['email']);
            if(!preg_match("/^[A-Za-z0-9\._%+\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,}$/",$email)) {
                $emailErr = "Invalid email format";
            }
        }

        if(empty($_POST['gender'])) {
            $genderErr = "* Gender is required";
        }else {
            $gender = safe_input($_POST['gender']);
        }

        if(empty($_POST['website'])) {
            $websiteErr = "";
            $website = "";
        }else {
            $website = safe_input($_POST['website']);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
        }
        if(empty($_POST['comment'])) {
            $commentErr = "";
            $comment = "";
        }else {
            $comment = safe_input($_POST['comment']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <h1 class="display-1">PHP Form Validation Example</h1>
    <div class="container mt-3">
        <h4 class="text-danger">* required field</h4>    
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $name;?>">
                <label for="name" class="text-danger">* Name:</label>
                <span class="text-danger"><?php echo $nameErr;?></span>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email;?>">
                <label for="email" class="text-danger">* Email:</label>
                <span class="text-danger"><?php echo $emailErr;?></span>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="url" class="form-control" id="url" placeholder="Enter URL" name="website" value="<?php echo $website;?>">
                <label for="url">Website:</label>
                <span class="text-danger"><?php echo $websiteErr;?></span>
            </div>
            <div class="form-floating mb-3 mt-3">
                <textarea class="form-control" id="comment" name="comment" placeholder="Comment goes here"><?php echo $comment;?></textarea>
                <label for="comment">Comments:</label>
            </div>
            <div class="mb-3 mt-3">
                <label class="text-danger">* Select Gender:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="male" name="gender" value="male" <?php if($gender == "male") {echo  "checked";}?>>Male
                    <label class="form-check-label" for="male"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="female" <?php if($gender == "female") {echo  "checked";}?>>Female
                    <label class="form-check-label" for="female"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="other" name="gender" value="other" <?php if($gender == "other") {echo  "checked";}?>>Others
                    <label class="form-check-label" for="other"></label>
                </div>
                <span class="text-danger"><?php echo $genderErr;?></span>
            </div>
            <button type="submit" class="btn btn-primary" name="submitBtn">Submit</button>
        </form>
    </div>
    <div class="containter my-3">
    <?php if(empty($nameErr) && empty($emailErr) && empty($genderErr) && empty($websiteErr) && $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submitBtn'])) { 
        $insert_sql = "INSERT INTO `forms` (`name`, `email`, `website`, `comments`, `gender`) VALUES ('$name', '$email', '$website', '$comment', '$gender')";
        if(mysqli_query($conn,$insert_sql)) {
            echo "record inserted successfully";
            header("location:jun242024.php");
            exit();
        }
        ?>
    <div>
        <h2>Output</h2>
        <ul>
            <li><b>Name : </b><?php echo $name?></li>
            <li><b>Gender : </b><?php echo $gender?></li>
            <li><b>Email : </b><?php echo $email?></li>
            <li><b>Website : </b><?php echo $website?></li>
            <li><b>Comment : </b><?php echo $comment?></li>
        </ul>
    </div>
    <?php
    }
    ?>
    </div>

</body>

</html>