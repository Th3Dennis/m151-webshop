<?php


if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

$_SESSION['cart'][] = $_REQUEST;

var_dump($_SESSION['cart']);