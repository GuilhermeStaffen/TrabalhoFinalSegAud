<?php 
function CreateResume($conexao, $userId, $phone, $website, $experience){
    $stmt = $conexao->prepare("INSERT INTO resumes (user_id, phone, website, experience) values (?,?,?,?)");
    $stmt->bindParam(1, $userId, PDO::PARAM_STR);
    $stmt->bindParam(2, $phone, PDO::PARAM_STR);
    $stmt->bindParam(3, $website, PDO::PARAM_STR);
    $stmt->bindParam(4, $experience, PDO::PARAM_STR);
    $stmt->execute();
}

function SearchResumes($conexao){
    $stmt = $conexao->prepare("SELECT users.user_id, resumes.resume_id, users.name, users.email, resumes.experience, resumes.phone, resumes.website FROM resumes INNER JOIN users on users.user_id=resumes.user_id");
    $stmt->execute();
    return $stmt;
}

function SearchResume($conexao, $resumeId){
    $stmt = $conexao->prepare("SELECT users.user_id, resumes.resume_id, users.name, users.email, resumes.experience, resumes.phone, resumes.website FROM resumes INNER JOIN users on users.user_id=resumes.user_id where resumes.resume_id=?");
    $stmt->bindParam(1, $resumeId, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt;
}
?>