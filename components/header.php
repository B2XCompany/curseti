<?php
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
            closeLogin();
            fetch(`./components/login.php`)
            .then(e=>e.text())
            .then(e=>{
                document.body.innerHTML += e;
            })
        }

        function getSignup(){
            closeLogin();
            fetch(`./components/signup.php`)
            .then(e=>e.text())
            .then(e=>{
                document.body.innerHTML += e;
            })
        }

        function closeLogin(){
            if(containerLogin) containerLogin.remove();
        }
    </script>
    
";