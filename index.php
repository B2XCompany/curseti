<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alata&display=swap');
        * {
            padding: 0;
            margin: 0;
            outline: none;
            text-decoration: none;
            font-family: Alata, sans-serif;
            border: none;
            scroll-behavior: smooth;
            font-weight: normal;
            --max: 1000px;
        }
        header{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
        }
        .inner-header{
            height: 60px;
            display: flex;
            gap: 20px;
            justify-content: space-between;
            align-items: center;
            width: calc(100% - 40px);
            padding:5px 20px;
            margin: auto;
            max-width: var(--max);
        }
        #banner{
            background: #202020;
        }
        .head-2{
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .bt-head{
            color: white;
            font-size: 16px;
            padding: 5px
        }
        .login{
            padding: 8px 25px;
            border-radius: 2px;
            background: #F24C4C;
        }
        
        #banner{
            width: calc(100% - 20px);
            padding: 10px;
            min-height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .inner-banner{
            width: calc(100% - 20px);
            padding: 10px;
            max-width: var(--max);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .banner-left, .banner-right{
            width: 50%;
        }
        .banner-left{
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 400px;
        }
        .banner-title{
            font-size: 28px;
            font-weight: bolder;
            color: white;
        }
        .banner-text{
            color: #CBCBCB;
        }
        .banner-now{
            padding: 10px 30px;
            border-radius: 2px;
            width: fit-content;
            background: #F24C4C;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <div class='inner-header'>
            <div class='head-1'>
                <a href="#"><img src='./logo.png'></a>
            </div>
            <div class='head-2'>
                <a href="#" class='bt-head'>Principal</a>
                <a href="#" class='bt-head'>Cursos</a>
                <a href="#" class='bt-head'>Certificações</a>
                <a href="#" class='bt-head login'>Entrar</a>
            </div>
        </div>
    </header>

    <section id="banner">
        <div class='inner-banner'>
            <div class='banner-left'>
                <h1 class='banner-title'>Cursos gratuitos com certificado online</h1>
                <p class='banner-text'>Expanda seu conhecimento com todos os cursos com certificados que disponibilizamos</p>
                <a class='banner-now' href='#'>Começar agora</a>
            </div>
            <div class='banner-right'>
            </div>
        </div>
    </section>
    <section id="courses">
        <div id="principalCourses">
            <div class="title-courses">
                <p>Principais cursos</p>
            </div>
            <div class="sec-courses">
                <div class="item">
                    <div class="item-img">
                        <img href="#"></img>
                    </div>
                    <div class="item-info">
                        <p class="item-title">Curso de programação</p>
                        <p class="item-users">300 alunos</p>
                        <p class="item-price">300 reais</p>
                        <p class="item-rate">5 stars</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="moreCourses">
            <div class="title-courses">
                <p>Mais cursos</p>
            </div>
            <div class="sec-courses"></div>
        </div>
    </section>
    
    <script>
        fetch("components/svg.html")
        .then(e=>e.text())
        .then(e=>{
            let titles = document.querySelectorAll(".title-courses")

            for(i of titles){
                i.innerHTML += e
            }
        })
    </script>
</body>
</html>