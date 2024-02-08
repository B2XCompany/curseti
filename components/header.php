<?php

// $user = "<script>alert('opa')</script>";

if($user){
    $text = $user;
} else {
    $text = "
        <a href='./login.php' class='bt-head login'>Entrar</a>
    ";
}

echo "
    <header id='headerP'>
        <div class='inner-header'>
            <div class='head-1'>
                <a href='./'><img src='./imgs/logo.png'></a>
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
        let lastScrollY = window.scrollY;
        window.addEventListener('scroll', e => {
            let wy = window.scrollY;

            if(wy > 30){
                headerP.classList.add('activeHeader')
            } else {
                headerP.classList.remove('activeHeader')
            }

            if(wy > lastScrollY){
                headerP.classList.add('hiddenHeader')
            } else {
                headerP.classList.remove('hiddenHeader')
            }

            lastScrollY = wy;
        })
    </script>
";