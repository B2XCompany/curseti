<?php
include"auth.php";
session_start();
$__CONEXAO__ = mysqli_connect($__LOG_DB_LOCAL__, $__LOG_DB_USER__, $__LOG_DB_PASSWORD__,$__LOG_DB_USER__) or die ("Atualize a página e tente novamente!");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

$user = $_SESSION['user'];

var_dump($user);


if($user){
    $user = json_decode($user);
    var_dump($user);
    $name = $user->user;
    $email = $user->email;
    $password = $user->password;

    echo $user, $name, $email, $password;
}

$__MAIN_WEB__ = "https://top.anizero.cc/";
$__WEB__ = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];

$__TIME__ = time();

$__YEAR__ = date("Y");

// FUNÇÕES

function urlAmigavel($string) {
    $string = mb_strtolower($string, 'UTF-8');
    $string = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    $string = trim($string, '-');
    return $string;
}

function setUser($string){
    $string = preg_replace('/[^A-Za-z-]+/', '', $string);
}

function setEmail($string){
    $string = filter_var($string, FILTER_VALIDATE_EMAIL);
}