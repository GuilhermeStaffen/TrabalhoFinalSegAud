<?php
include_once '../../model/loginRequests.php';
include_once '../../model/connect.php';
$email = filter_input(INPUT_POST, 'email', FILTER_UNSAFE_RAW);
$senha = hash('sha512', filter_input(INPUT_POST, 'senha', FILTER_UNSAFE_RAW));

try {
    $return = Login($conexao, $email, $senha);
    if ($return[0] >=1) {
        session_start();
        $_SESSION["autenticado"] = true;
        $_SESSION["userId"] = $return[1];
        $_SESSION["is_admin"] = $return[2];
        $_SESSION["name"] = $return[3];
        $_SESSION["email"] = $return[4];
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        header('Location: ../../view/Dashboard/main.php');
    } else {
        header('Location: ../../view/Login/login.php?return=Acesso Negado');
    }
} catch (PDOException $erro) {
    echo "<p>Erro: " . $erro->getMessage() . " | Contate o administrador</p>";
}

