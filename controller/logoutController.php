<?php
if(session_status() === 1){
    session_start();
}

//Include logic here


$_SESSION['loggedIn'] = false;

header("Location: ../index.php");

?>