<?php
include '../conexao.php';

cantLog($__EMAIL__);

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$email = $json->email;
$password = $json->password;

$email      = mysqli_real_escape_string($__CONEXAO__, $email);
$password   = mysqli_real_escape_string($__CONEXAO__, $password);

if(!$email or !$password){
    endCode("Algum dado está faltando");
}

$checkEmail = setEmail($email);

if(!$checkEmail){
    endCode("Email inválido");
}

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email='$email'");

if(mysqli_num_rows($tryConnect) < 1){
    endCode("Usuário não encontrado");
}

$passUser   = mysqli_fetch_assoc($tryConnect)["password"];

$passwordV  = password_verify($password, $passUser);

if(!$passwordV){
    endCode("Senha incorreta");
}

$_SESSION['email'] = $email;
$_SESSION['password'] = $passUser;

endCode("Sucesso!");

function endCode($msg){
    echo json_encode(array("mensagem"=>$msg));
    exit;
}

