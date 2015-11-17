<?php
    if (substr($_SERVER['HTTP_HOST'],0,5) === 'local') {
        $conn = mysqli_connect("localhost", "root","sqflirzel", "db401201757");
    } else {
        $conn = mysqli_connect("db401201757.db.1and1.com", "dbo401201757", "pphmdb42","db401201757");
    }
    $retArray['success'] = true;
    $sql = mysqli_query($conn, "SELECT time_of_redirect FROM push_red");
 
    while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        $red[] = $row;
    }
    $x = count($red);
    
    if ($x === 1) {
        echo "There has been one redirect:<br /><br />";
    } else {
        echo "There have been $x redirects:<br /> <br />";
    }
    
    foreach($red as $key => $val) {
        echo $val['time_of_redirect'] . '<br />';
    }