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
    <div id="outBox">
        <div id="loginBox">
            <div id="loginTop">
                <div class="inputDiv">
                    <input id="name" name="name">
                </div>
                <div class="inputDiv" for="password">
                    <input type="password" id="password" name="password">
                    <span id="spanlog">Teste</span>
                </div>
            </div>
            <div id="loginBot">
                <a id="register" href="./register">Registrar-se</a>
                <a id="back" href="./">Voltar</a>
            </div>
        </div>
    </div>
    <script>
    password.addEventListener("focusin", e=>{
        spanlog.classList.add("focusin");

    })
    password.addEventListener("focusout", e=>{
        if(!e.target.value){
            spanlog.classList.remove("focusin");
        }
    })
    </script>

</body>
</html>