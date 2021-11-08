<?php
if(session_status() === 1){
    session_start();
}

unset($_SESSION['cart']);

header("Location: ../overview.php");
