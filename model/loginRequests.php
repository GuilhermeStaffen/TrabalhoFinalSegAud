<?php 
function Login($conexao, $email, $senha){
    $stmt = $conexao->prepare("SELECT * FROM users WHERE email = ? and password = ? ");
    $stmt->bindParam(1, $email, PDO::PARAM_STR);
    $stmt->bindParam(2, $senha, PDO::PARAM_STR);
    $stmt->execute();
    $rs = $stmt->fetch(PDO::FETCH_OBJ);
    return array($stmt->rowCount(), $rs->user_id, $rs->is_admin, $rs->name, $rs->email);
}
?>