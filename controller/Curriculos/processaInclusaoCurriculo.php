<?php
require_once '../../controller/Login/validaSessao.php';
include_once '../../model/curriculoRequests.php';
include_once '../../model/connect.php';
session_start();
$token = filter_input(INPUT_POST, 'token', FILTER_UNSAFE_RAW);
if (!$token || $token !== $_SESSION['token']) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 - Method Not Allowed');
    header('Location: ../../view/Dashboard/main.php?r='. md5(uniqid(mt_rand(), true)) .'');
} else {
    $userId = $_SESSION["userId"];
    $phone = filter_input(INPUT_POST, 'phone', FILTER_UNSAFE_RAW);
    $website = filter_input(INPUT_POST, 'website', FILTER_UNSAFE_RAW);
    $experience = filter_input(INPUT_POST, 'experience', FILTER_UNSAFE_RAW);

    if (trim($phone) == "") {
        $phone = null;
    }
    if (trim($website) == "") {
        $website = null;
    }

    try {
        if (trim($experience) != "") {
            CreateResume($conexao, $userId, $phone, $website, $experience);
        }
        header('Location: ../../view/Dashboard/main.php?r='. md5(uniqid(mt_rand(), true)) .'');
    } catch (PDOException $erro) {
        echo "<p>Erro: " . $erro->getMessage() . " | Contate o administrador</p>";
    }
}
