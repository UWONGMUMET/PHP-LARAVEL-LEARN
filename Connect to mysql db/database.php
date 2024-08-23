<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "pbd_firman";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception $e) {
        echo "Could not connect";
    }

    if($conn) {
        echo "You are connected <br>";
    } else {
        echo "No connection <br>";
    }

?>