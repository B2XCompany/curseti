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
            min-height: 500px;
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
        }
        .banner-title{
            font-size: 28px;
            font-weight: bolder;
        }
        .banner-text{
            color: #CBCBCB;
        }
        .banner-now{
            padding: 10px 30px;
            border-radius: 2px;
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
        <div class='banner-left'>
            <h1 class='banner-title'>Cursos gratuitos com certificado online</h1>
            <p class='banner-text'>Expanda seu conhecimento com todos os cursos com certificados que disponibilizamos</p>
            <a class='banner-now' href='#'>Começar agora</a>
        </div>
        <div class='banner-right'>
        </div>
    </section>
    <section id="courses">
        <div id="principalCourses">
            <div class="title-courses">
                <p>Principais cursos</p>
                <img src="#"></img>
            </div>
            <div class="sec-courses"></div>
        </div>
        <div id="moreCourses">
            <div class="title-courses">
                <p>Mais cursos</p>
                
                <svg width="71" height="68" viewBox="0 0 71 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.261 1.22491L45.142 1.02558C41.3453 0.349256 37.4494 0.470086 33.7019 1.38039L13.2863 6.33949C-0.20083 9.61561 -4.31933 26.7812 6.21305 35.8203C9.98401 39.0566 12.1538 43.7781 12.1538 48.7474V49.3522C12.1538 63.8782 28.2297 72.6458 40.4418 64.7802L56.8851 54.1893C79.0564 39.9091 72.2244 5.84983 46.261 1.22491Z" fill="url(#paint0_linear_461_3)"/>
                <defs>
                <linearGradient id="paint0_linear_461_3" x1="89" y1="9.53221" x2="24.8751" y2="67.8775" gradientUnits="userSpaceOnUse">
                <stop stop-color="#F24C4C" stop-opacity="0.26"/>
                <stop offset="1" stop-color="#F24C4C" stop-opacity="0"/>
                </linearGradient>
                </defs>
                </svg>

            </div>
            <div class="sec-courses"></div>
        </div>
    </section>
    
</body>
</html>