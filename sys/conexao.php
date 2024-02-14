<?php
include"auth.php";
session_start();
$__CONEXAO__ = mysqli_connect(
    LOG_DB_LOCAL,
    LOG_DB_USER,
    LOG_DB_PASSWORD,
    LOG_DB_USER
) or die ("Atualize a página e tente novamente!");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');


// USER 

$__EMAIL__ = $_SESSION["email"];
$__PASSWORD__ = $_SESSION["password"];

$_query_ = mysqli_query($__CONEXAO__, "select * from users where email='$__EMAIL__' and password='$__PASSWORD__'");

if(mysqli_num_rows($_query_) < 1){
    session_destroy();
    session_start();

    $__EMAIL__ = $_SESSION["email"];
    $__PASSWORD__ = $_SESSION["password"];
} else {
    $__ID__ = mysqli_fetch_assoc($_query_)['id'];
    $__USER__ = mysqli_fetch_assoc($_query_)['name'];
}


// SERVER
$__METHOD__ = $_SERVER["REQUEST_METHOD"];
$__STATUS__ = $_SERVER["REDIRECT_STATUS"];
$__URL__ = $_SERVER["HTTP_HOST"];    


$__MAIN_WEB__ = "https://top.anizero.cc/";
$__WEB__ = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];

$__TIME__ = time();

$__YEAR__ = date("Y");

// FUNÇÕES

function endCode($msg, $status){
    echo json_encode(array("mensagem"=>$msg, "response"=>$status));
    exit;
}

function urlAmigavel($string) {
    $string = mb_strtolower($string, 'UTF-8');
    $string = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    $string = trim($string, '-');
    return $string;
}

function setUser($string){
    $string = trim($string);
    $string = preg_replace('/\s+/', ' ', $string);
    $string = preg_replace('/[^A-Za-z]+/', ' ', $string);
    return $string;
}


function setEmail($string){
    $string = filter_var($string, FILTER_VALIDATE_EMAIL);
    return $string;
}



// LOG  

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

// COOKIE 

function newCookie($email, $password, $time){
    $header = json_encode([
        'alg' => 'HS256',
        'typ' => 'JWT' 
    ]);

    $payload = json_encode([
        'email' => $emai, 
        'password' => $password,
        'lastverify' => $time,
        'exp' => time() + 3600
    ]);

    $header = base64_encode($header);
    $payload = base64_encode($payload);

    $signature = hash_hmac('sha256', $header . "." . $payload, TOKEN_KEY, true);
    $signature = base64_encode($signature);
    $token = "$header.$payload.$signature";

    setcookie('session', $token, [
        'httponly' => true,
        'samesite' => 'Strict',
    ]);

    return $token;
}

function checkCookie(){
    return $_COOKIE["auth"];
}

