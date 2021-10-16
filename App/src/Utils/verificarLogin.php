<?php 
    session_start();
    if(!$_SESSION['usuario']) {
        header('Location: ../Views/login.php');
        exit();
    }