<?php
include"auth.php";
session_start();
$__CONEXAO__ = mysqli_connect($__LOG_BD_LOCAL__, $__LOG_BD_USER__, $__LOG_BD_PASSWORD__,$__LOG_BD_USER__) or die ("Atualize a página e tente novamente!");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

$user;

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

class User{
    public int $id;
    public ?string $name;
    public ?string $email;
    public ?string $courses;
    public int $level;
    
    public function __construct(int $id, ?string $name, ?string $email, ?string $courses, int $level){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
        $this->level = $level;
    }
}