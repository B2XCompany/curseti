<?php
include"auth.php";
session_start();
$__CONEXAO__ = mysqli_connect($__LOG_DB_LOCAL__, $__LOG_DB_USER__, $__LOG_DB_PASSWORD__,$__LOG_DB_USER__) or die ("Atualize a página e tente novamente!");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');


// USER 

$__EMAIL__ = $_SESSION["email"];
$__PASSWORD__ = $_SESSION["passsword"];

$_query_ = mysqli_query($__CONEXAO__, "select * from users where email='$__EMAIL__' and password='$__PASSWORD__'");

if(mysqli_num_rows($_query_) < 1){
    session_destroy();
    session_start();

    $__EMAIL__ = $_SESSION["email"];
    $__PASSWORD__ = $_SESSION["password"];
} else {
    $__ID__ = mysqli_fetch_assoc($_query_)['id'];
}

echo $__EMAIL__;

// SERVER
$__METHOD__ = $_SERVER["REQUEST_METHOD"];
$__STATUS__ = $_SERVER["REDIRECT_STATUS"];
$__URL__ = $_SERVER["HTTP_HOST"];    


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

function setLog($email, $pass){
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pass;
}

function cantLog($__EMAIL__){
    if($__EMAIL__){
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array("status" => 401, "response" => false, "message" => "You're logged"));
        exit;
    }
}

function justLog($__EMAIL__){
    if(!$__EMAIL__){
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array("status" => 401, "response" => false, "message" => "You're not logged in."));
        exit;
    }
}