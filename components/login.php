
<?php 
session_start();
    
$tk = $_GET['token'];

if(!$tk or $tk != $_SESSION['codLogin']){
    echo 'triste';
    exit;
}

$newToken = md5(microtime());
$_SESSION['codLogin'] = $newToken;

$logElement = "
<div id='containerLogin'>
    <div class='out-login'>
        <h1 class='title-login'>Entre em sua conta</h1>
        <input type='text' placeholder='exemplo@gmail.com'>
        <input type='password' placeholder='******'>
        <button class='bt-login'>Entrar</button>
        <p>Ainda não tem conta? 
            <button class='create-login'>Criar conta</button>
        </p>
        <button class='forget-login'>Esqueci minha senha</button>
        <button onclick='closeLogin()' class='back-login'>Voltar</button>
    </div>

</div>
";