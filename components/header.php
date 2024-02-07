<?php
// include"../sys/conexao.php";
// $user = "a";
session_start();
$token = md5(microtime());

$_SESSION["codLogin"] = $token;

if($user){
    $text = $user;
} else {
    $text = "
        <button onclick='getLogin()' class='bt-head login'>Entrar</button>
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
    <script>
        function getLogin(){
            let token = '$token';
            fetch(`./components/login.php?token=\${token}`)
            .then(e=>e.text())
            .then(e=>{
                document.body.innerHTML += e;
                token = containerLogin.dataset.token;
                console.log(token)
            })
        }

        function closeLogin(){
            containerLogin.remove();
        }
    </script>
    
";