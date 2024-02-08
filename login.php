<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>oi fofa :3</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/roott.css">
</head>
<body>
    <?php require_once"components/header.php"; ?>
    <div id="outBox">
        <div id="loginBox">
            <div id="loginTop">
            <div class="inputDiv" for="password">
                    <input onfocusin="focusIn(this)" onfocusout="focusOut(this)" name="password">
                    <span class="spanlog">Email</span>
                </div>
                <div class="inputDiv" for="password">
                    <input type="password" onfocusin="focusIn(this)" onfocusout="focusOut(this)" name="password">
                    <span class="spanlog">Senha</span>
                </div>
            </div>
            <div id="loginBot">
                <a id="register" href="./register">Registrar-se</a>
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
    </script>

</body>
</html>