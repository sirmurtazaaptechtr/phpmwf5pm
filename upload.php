<?php
    $uploadErr = [];
    $uploads_dir = './uploads/';
    //  echo "<pre>";
    //  print_r($_REQUEST);
    //  echo "</pre>";

    //  echo "<pre>";
    //  print_r($_FILES);
    //  echo "</pre>";

    //echo "<p>" . basename($_FILES['fileToUpload']['name']) . "</p>";

    $to = $uploads_dir.basename($_FILES['fileToUpload']['name']);
    //echo "<p>$to</p>";

    $from = $_FILES['fileToUpload']['tmp_name'];
    //echo "<p>$from</p>";

    $size = $_FILES['fileToUpload']['size'];
    //  echo "<p>$size</p>";
    // dublicate check
    // Check if file already exists
    if (file_exists($to)) {
    array_push($uploadErr,"Sorry, file already exists.");
    }
    // limit file size 2MB
    if($size > 2097152) {
    array_push($uploadErr,"file size must be under 2MB");
    }
    // limit file type
    $filetype = strtolower(pathinfo($to,PATHINFO_EXTENSION));
    if(!($filetype == 'png' || $filetype == 'jpg' || $filetype == 'jpeg' || $filetype == 'bmp' || $filetype == 'svg' || $filetype == 'webp' || $filetype == 'gif')) {
    array_push($uploadErr,"Sorry, only JPG, JPEG, PNG, BMP, WEBP, SVG & GIF files are allowed.");
    }

    //  $isUploaded = move_uploaded_file($from,$to);
    //  var_dump($isUploaded);

    //  if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],'./uploads/'.basename($_FILES['fileToUpload']['name']))) {
    //     echo("file uploaded successfully");
    //  }
    if(empty($uploadErr)) {
    if(move_uploaded_file($from,$to)) {
        echo("file uploaded successfully");
    }
    }
    echo "<pre>";
    print_r($uploadErr);
    echo "</pre>";