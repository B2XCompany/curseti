<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>oi fofa :3</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/roott.css">
    <link rel="stylesheet" href="style/headerr.css">
</head>
<body>
    <?php require_once"components/header.php"; ?>
    <div id="outBox">
        <div id="loginBox">
            <div id="loginTop">
                <div class="inputDiv">
                    <input onfocusin="focusIn(this)" onfocusout="focusOut(this)" name="name" id="name">
                    <span class="spanlog">Nome</span>
                </div>
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
                <button id="send">Enviar</button>
                <a id="register" href="./login">Login</a>
                <a id="back" href="./">Voltar</a>
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

        send.addEventListener('onclick', ()=>{
            let data = {user: name.value, email: email.value, password: password.value}
            fetch('./sys/api/registerApi.php',{
                method: "POST",
                body: JSON.stringify(data)
            })
        })
    </script>

</body>
</html>