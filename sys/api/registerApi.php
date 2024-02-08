<?php

include '../sys/conexao.php';

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$user       = $json->user;
$email      = $json->email;
$password   = $json->password;
$confirm    = $json->confirm;

$user       = mysqli_real_escape_string($conexao, $user);
$email      = mysqli_real_escape_string($conexao, $email);
$password   = mysqli_real_escape_string($conexao, $password);
$confirm   = mysqli_real_escape_string($conexao, $confirm);

if(!$user or !$email or !$password or !$confirm){
    endCode("Algum dado está faltando");
}

if($password !== $confirm){
    endCode("Senhas não coincidem");
}

$user       = setUser($user);
$email      = setEmail($email);
$password   = password_hash($password, PASSWORD_DEFAULT);

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email='$email'");

if(mysqli_num_rows($tryConnect) > 0){
    endCode(array("mensagem" => "Usuário já existe"));
}

mysqli_query($__CONEXAO__, "insert into users (user, email, password) values ('$user', '$email', '$password')");


endCode("Sucesso!");

function endCode($msg){
    echo json_encode(array("mensagem"=>$msg));
    exit;
}