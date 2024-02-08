<?php

include '../sys/conexao.php';

header('Content-Type: application/json; charset=utf-8');

$request = file_get_contents('php://input');
$json = json_decode($request);

$user = $json->user;
$password = $json->password;

$tryConnect = mysqli_query($__CONEXAO__, "select * from users where email=$user and password=$password")
if(mysqli_num_rows($tryConnect) > 0){
    // user existe
} else {
    $answer = FALSE
}

echo json_encode(array("user"=>$user, "password"=>$password));

