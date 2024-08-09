<?php
    $uploadErr = [];
    $uploads_dir = './uploads/';
   
    $to = $uploads_dir.basename($_FILES['fileToUpload']['name']);
    $from = $_FILES['fileToUpload']['tmp_name'];
    $size = $_FILES['fileToUpload']['size'];
    $filetype = strtolower(pathinfo($to,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($to)) {
    array_push($uploadErr,"Sorry, file already exists.");
    }
    
    // limit file size 2MB
    if($size > 2097152) {
    array_push($uploadErr,"file size must be under 2MB");
    }
    
    // limit file type    
    if(!($filetype == 'png' || $filetype == 'jpg' || $filetype == 'jpeg' || $filetype == 'bmp' || $filetype == 'svg' || $filetype == 'webp' || $filetype == 'gif')) {
    array_push($uploadErr,"Sorry, only JPG, JPEG, PNG, BMP, WEBP, SVG & GIF files are allowed.");
    }
    
    if(empty($uploadErr)) {
        if(move_uploaded_file($from,$to)) {
            echo("file uploaded successfully");
        }
    }else {
        echo "<pre>";
        print_r($uploadErr);
        echo "</pre>";
    }