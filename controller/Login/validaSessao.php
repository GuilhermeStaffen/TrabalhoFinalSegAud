<?php
    session_start();
    if ($_SESSION['autenticado'] != true){
        header('Location: ../../view/Login/login.php?r='. md5(uniqid(mt_rand(), true)) .'');
        exit();
    }
?>