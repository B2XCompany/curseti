<?php

include '../sys/conexao.php';

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$user = $json->user;
$email = $json->email
$password = $json->password;

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email=$user") // falta checar a senha e email e blablabla
if(mysqli_num_rows($tryConnect) > 0){
    // email já usado
} else if(){
    
    // adicionar penis
}

echo json_encode(array("user"=>$user, "password"=>$password));