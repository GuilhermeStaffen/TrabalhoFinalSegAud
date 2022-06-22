<?php
// Cria a conexão com o banco de dados
try {
    $conexao = new PDO("mysql:host=localhost;dbname=trabsegu", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "<p class=\"bg-danger\">Erro na conexão:" . $erro->getMessage() . "</p>";
}
?>