<?php

if(session_status() === 1){
    session_start();
}

if (isset($_SESSION['loggedIn'])) {

    if(!$_SESSION['loggedIn']){
        header("Location: ./login.php");
    }

} else{
    header("Location: ./login.php");
}
