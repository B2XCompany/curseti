<?php

include '../sys/conexao.php';

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$email = $json->user;
$password = $json->password;

$email      = mysqli_real_escape_string($conexao, $email);
$password   = mysqli_real_escape_string($conexao, $password);

$email      = setEmail($email);

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email='$email' and password='$password'")
if(mysqli_num_rows($tryConnect) > 0){
    // user existe
} else {
    $answer = false;
}

echo json_encode();