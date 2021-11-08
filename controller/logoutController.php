<?php
if(session_status() === 1){
    session_start();
}

$_SESSION['loggedIn'] = false;
unset($_SESSION['email']);

header("Location: ../index.php");

?>