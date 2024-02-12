<?php
include '../conexao.php';

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$user       = $json->user;
$email      = $json->email;
$password   = $json->password;

$user       = mysqli_real_escape_string($__CONEXAO__, $user);
$email      = mysqli_real_escape_string($__CONEXAO__, $email);
$password   = mysqli_real_escape_string($__CONEXAO__, $password);

if(!$user or !$email or !$password or !$confirm){
    endCode("Algum dado está faltando $user, $email, $password, $confirm");
}

$user       = setUser($user);
$checkEmail = setEmail($email);

if(!$checkEmail){
    endCode("Email inválido");
}

$password   = password_hash($password, PASSWORD_DEFAULT);

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email='$email'");

if(mysqli_num_rows($tryConnect) > 0){
    endCode("Usuário já existe");
}

mysqli_query($__CONEXAO__, "insert into users (name, email, password) values ('$user', '$email', '$password')");

setLog($email, $password);

endCode("Sucesso!");

function endCode($msg){
    echo json_encode(array("mensagem"=>$msg));
    exit;
}