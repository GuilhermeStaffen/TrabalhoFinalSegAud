<?php
    session_start();
    if ($_SESSION['autenticado'] != true){
        header('Location: ../../view/Login/login.php?return=Acesso Negado');
        exit();
    }
?>