<?php

include '../conexao.php';

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$email = $json->user;
$password = $json->password;

$email      = mysqli_real_escape_string($__CONEXAO__, $email);
$password   = mysqli_real_escape_string($__CONEXAO__, $password);

if(!$email or !$password){
    endCode("Algum dado está faltando");
}

$email      = setEmail($email);
$password   = password_hash($password, PASSWORD_DEFAULT);

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email='$email' and password='$password'");

if(mysqli_num_rows($tryConnect) < 1){
    endCode("Usuário ou senha incorretos");
}

$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

endCode("Sucesso!");

function endCode($msg){
    echo json_encode(array("mensagem"=>$msg));
    exit;
}