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
        let token = '$token';
        function getLogin(){
            fetch(`./components/login.php?token=\${token}`)
            .then(e=>e.json())
            .then(e=>{
                console.log('Velha '+token)
                document.body.innerHTML += e.element;
                token = e.newToken;
                console.log('Nova '+token)
            })
        }

        function closeLogin(){
            containerLogin.remove();
        }
    </script>
    
";