<?php

function db_connect1()
{
    $db_host = '51.15.13.170';
    $db_name = 'chillihero_dennis151';
    $db_user = 'chillihero_dennis151';
    $db_pass = '03u9X2L1bXwB';


    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}

function db_connect2()
{
    $db_host = '34.65.96.61';
    $db_name = 'm151_dennis';
    $db_user = 'root';
    $db_pass = 'root';


    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}

?>
