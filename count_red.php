<?php
    if (substr($_SERVER['HTTP_HOST'],0,5) === 'local') {
        $conn = mysqli_connect("localhost", "root","sqflirzel", "db401201757");
    } else {
        $conn = mysqli_connect("db401201757.db.1and1.com", "dbo401201757", "pphmdb42","db401201757");
    }
    $retArray['success'] = true;

    date_default_timezone_set('America/Chicago');
    $today = date('Y-m-d H:i:s');

    if ($sql = mysqli_query($conn, "INSERT INTO push_red (time_of_redirect) VALUES ('" . $today . "')")) {
        echo json_encode($retArray);
    }
    