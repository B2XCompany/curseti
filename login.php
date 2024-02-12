<?php 
include 'sys/conexao.php';

cantLog($__EMAIL__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>CurseTI - Entrar em sua conta</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/roott.css">
    <link rel="stylesheet" href="style/headerr.css">

</head>
<body>
    <?php require_once"components/header.php"; ?>
    <div id="outBox">
        <div id="loginBox">
            <h1 class="title-login">Entre em sua conta</h1>
            <div id="loginTop">
                <div class="inputDiv">
                    <input onfocusin="focusIn(this)" onfocusout="focusOut(this)" name="email" id="email">
                    <span class="spanlog">Email</span>
                </div>
                <div class="inputDiv">
                    <input type="password" onfocusin="focusIn(this)" onfocusout="focusOut(this)" name="password" id="password">
                    <span class="spanlog">Senha</span>
                </div>
            </div>
            <div id="loginBot">
                <button onclick="this.children[0].classList.toggle('connect-active')" class='connect-bt'>
                    <span>
                        <svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 9L10.5 23L35.5 2" stroke="white" stroke-width="5"/>
                        </svg>
                    </span>
                    Manter-me conectado
                </button>
                <button id="sendData">Enviar</button>
                <a id="register" href="./register">Ainda não tem uma conta? <span>Registrar-se</span></a>
            </div>
        </div>
    </div>

    <script>
        function focusIn(me){
            me.parentElement.children[1].classList.add('focusin')
        }

        function focusOut(me){
            if(!me.value){
                me.parentElement.children[1].classList.remove("focusin");
            }
        }

        sendData.addEventListener('click', ()=>{
            let data = {email: email.value, password: password.value}
            fetch('./sys/api/loginApi',{
                method: "POST",
                body: JSON.stringify(data)
            })
            .then(e=>e.json())
            .then(e=>console.log(e))
        })
    </script>

</body>
</html>