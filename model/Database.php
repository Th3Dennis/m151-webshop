<?php

function db_connect()
{
    $db_host = '34.65.211.44';
    $db_name = '';
    $db_user = 'hallo123';
    $db_pass = 'root';


    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}

?>
