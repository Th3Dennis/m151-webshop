<?php
if(session_status() === 1){
    session_start();
}


if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}


if(!in_array($_REQUEST, $_SESSION['cart'])){
    array_push($_SESSION['cart'], $_REQUEST);
    $_SESSION['message'] = 'Product added to cart';
}
else{
    $_SESSION['message'] = 'Product already in cart';
}

header("Location: ../overview.php");

?>