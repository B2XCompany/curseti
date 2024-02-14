<?php
include '../conexao.php';

cantLog($__EMAIL__);

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$user       = $json->user;
$email      = $json->email;
$password   = $json->password;

$user       = mysqli_real_escape_string($__CONEXAO__, $user);
$email      = mysqli_real_escape_string($__CONEXAO__, $email);
$password   = mysqli_real_escape_string($__CONEXAO__, $password);

if(!$user or !$email or !$password){
    endCode("Algum dado está faltando", false);
}

$user       = setUser($user);
$checkEmail = setEmail($email);

if(!$checkEmail){
    endCode("Email inválido", false);
}

$password   = password_hash($password, PASSWORD_DEFAULT);

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email='$checkEmail'") or die("erro select");

if(mysqli_num_rows($tryConnect) > 0){
    endCode("Usuário já existe", false);
}

mysqli_query($__CONEXAO__, "insert into users (name, email, password, lastModify) values ('$user', '$checkEmail', '$password', '$__TIME__')")  or die("erro insert");

$_SESSION['email'] = $checkEmail;
$_SESSION['password'] = $password;

endCode("Sucesso!", true);
