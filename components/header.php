<?php
if($user){
    $text = $user;
} else {
    $text = "
        <a href='./dashboard.php' class='bt-head login'>Entrar</a>
    ";
}

echo "
    <header>
        <div class='inner-header'>
            <div class='head-1'>
                <a href='#'><img src='./imgs/logo.png'></a>
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