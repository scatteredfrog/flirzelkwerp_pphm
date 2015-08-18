<?php
    ini_set("log_errors","On");
    if (substr($_SERVER['HTTP_HOST'],0,5) === 'local') {
        $conn =new mysqli("localhost", "root","sqflirzel", "db401201757");
    } else {
        $conn =new mysqli("db401201757.db.1and1.com", "dbo401201757", "pphmdb42","db401201757");
    }

    if($conn->connect_error) {
      die('Count not connect: '.$conn->connect_error);
    }
    $today = date("M j, Y -- h:i:sa");
    $error_message = $_POST['error_message'];
    $name_content = $_POST['name_content'];
    $address_content = $_POST['address_content'];
    $area_code_content = $_POST['area_code_content'];
    $phone_content = $_POST['phone_content'];
    $email_content = $_POST['email_content'];
    $topic_content = $_POST['topic_content'];
    $details_content = $_POST['details_content'];
    
    $sql = "INSERT INTO contact_form_errors (date_entered,error_message,name_content,address_content,area_code_content,phone_content,email_content,topic_content,details_content) "
            . "VALUES ('$today','$error_message','$name_content','$address_content','$area_code_content','$phone_content','$email_content','$topic_content','$details_content')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: ".$conn->error;
    }
    $conn->close();
