<?php

    ini_set('display_errors', 0 );
    error_reporting(0);
    session_start();
    if(!$_SESSION['usuario']){
        header('Location:../');
    }else{
        header('Location:./posts.php');
    }
    include('../db/db.php');

?>