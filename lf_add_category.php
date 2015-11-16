<?php
    if (substr($_SERVER['HTTP_HOST'],0,5) === 'local') {
        $conn = mysqli_connect("localhost", "root","sqflirzel", "db401201757");
    } else {
        $conn = mysqli_connect("db401201757.db.1and1.com", "dbo401201757", "pphmdb42","db401201757");
    }
    $retArray['success'] = true;
    $sql = mysqli_query($conn, "SELECT category FROM lf_tool_form_category WHERE category = " . $_POST['category']);
    if ($sql) {
        $retArray['success'] = false;
        $retArray['error_message'] = $_POST['category'] . ' already exists as a category.';
    }
    if (!$retArray['success']) {
        echo json_encode($retArray);
    }

    if ($sql = mysqli_query($conn, "INSERT INTO lf_tool_form_category (category) VALUES ('" . $_POST['category'] . "')")) {
        echo json_encode($retArray);
    }
    