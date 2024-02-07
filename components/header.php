<?php
// include"../sys/conexao.php";
$user = "a";


if($user){
    $text = $user;
} else {
    $text = "
    <a href='#' class='bt-head login'>Entrar</a>
    ";
}

echo "
    <header>
        <div class='inner-header'>
            <div class='head-1'>
                <a href='#'><img src='https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg'></a>
            </div>
            <div class='head-2'>
                <a href='#' class='bt-head'>Principal</a>
                <a href='#' class='bt-head'>Cursos</a>
                <a href='#' class='bt-head'>Certificações</a>
                $text
            </div>
        </div>
    </header>
";