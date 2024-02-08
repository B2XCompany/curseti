<?php

include '../sys/conexao.php';

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$email = $json->user;
$password = $json->password;

if(!$email or !$password){
    endCode("Algum dado está faltando");
}

$email      = mysqli_real_escape_string($conexao, $email);
$password   = mysqli_real_escape_string($conexao, $password);

$email      = setEmail($email);
$password   = password_hash($password, PASSWORD_DEFAULT);

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email='$email' and password='$password'");

if(mysqli_num_rows($tryConnect) < 1){
    endCode("Usuário ou senha incorretos");
}

$_SESSION["user"] = json_encode(array(
    "user"=>$user,
    "email"=>$email,
    "password"=>$password
));

endCode("Sucesso!");

function endCode($msg){
    echo json_encode(array("mensagem"=>$msg));
    exit;
}