<?php 
include 'sys/conexao.php';


justLog($__EMAIL__);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/headerr.css">
    <link rel="stylesheet" href="style/roott.css">
    <link rel="stylesheet" href="style/mainn.css">
    <link rel="shortcut icon" href="./icon.png" type="image/x-icon">
    <title>CurseTI - Dashboard</title>
    <style>
        .partes{
            display: flex;
        }
        .left{
            width: 30%;
            max-width: 250px;
            background: linear-gradient(-210deg, #202020, #101010);
            display: flex;
            justify-content: center;
            min-height: calc(100svh - 40px);
            padding: 20px 0;
        }
        .right{
            width: 100%;
            background: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #welcome {
            width: 100%;
        }
        .user-data {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .user-data-box {
            width: calc(100% / 3 - 20px);
            aspect-ratio: 1.2;
            border-radius: 5px;
            background: #fff;
            box-shadow: #ccc 1px 1px 4px 1px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .data-title {
            color: #656565;
            font-size: 1.1rem;
        }
        .data-num {
            color: var(--contraste);
            font-size
        }
        .title-courses p{
            margin: 0;
        }
        .progress-bar {
            display: flex;
            width: 100%;
            border-radius: 5px;
            height: 10px;
            background: #e1e1e1;
        }
        .progress-bar:before {
            content: "";
            width: var(--progress);
            background: var(--contraste);
            border-radius: 5px;
        }
        .progress-text {
            font-size: 0.9rem;
            color: #7B7B7B;
        }
    </style>
</head>
<body>
    <div class="partes">
        <div class="left">
            <a href="./">
                <img src="./imgs/logo.png">
            </a>
        </div>
        <div class="right">
            <section id="welcome">
                <p class="textW">Bem-vindo(a) <?php echo $__USER__; ?></p>
            </section>
            <section id="userData">
                <div class="title-courses">
                    <p>Sobre seu perfil</p>
                </div>
                <div class="user-data">
                    <div class="user-data-box">
                        <p class="data-title">Certificações</p>
                        <p class="data-num">6</p>
                        <p class="data-text">Ver meus certificados</p>
                    </div>
                    <div class="user-data-box">
                        <p>Em andamento</p>
                    </div>
                    <div class="user-data-box">
                        <p>Tempo de estudo</p>
                    </div>
                </div>
            </section>
            <section class="courses">
                <div class="title-courses">
                    <p>Cursos em andamento</p>
                </div>
                <div class="sec-courses">
                    
                    <div class="item">
                        <div class="item-img">
                            <img src="https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg">
                        </div>
                        <div class="item-info">
                            <p class="item-title">Curso de programação</p>
                            <div class="item-rate"></div>
                            <div class="progress-bar" style="--progress: 70%"></div>
                            <p class="progress-text">70% concluído</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-img">
                            <img src="https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg">
                        </div>
                        <div class="item-info">
                            <p class="item-title">Curso de programação</p>
                            <div class="item-rate"></div>
                            <div class="progress-bar" style="--progress: 30%"></div>
                            <p class="progress-text">30% concluído</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-img">
                            <img src="https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg">
                        </div>
                        <div class="item-info">
                            <p class="item-title">Curso de programação</p>
                            <div class="item-rate"></div>
                            <div class="progress-bar" style="--progress: 70%"></div>
                            <p class="progress-text">70% concluído</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-img">
                            <img src="https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg">
                        </div>
                        <div class="item-info">
                            <p class="item-title">Curso de programação</p>
                            <div class="item-rate"></div>
                            <div class="progress-bar" style="--progress: 70%"></div>
                            <p class="progress-text">70% concluído</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    <script>
        fetch("imgs/star.svg")
        .then(e=>e.text())
        .then(e=>{
            let itemrate = document.querySelectorAll(".item-rate")
            rate = 4.5
            starCount = Math.floor(rate) - 1

            for(i of itemrate){
                for(j = 0; j < 5; j++){
                    star = document.createElement("div")
                    fillStar = j <= starCount ? "fill-star": "🔥"
                    star.innerHTML = e;
                    star.children[0].children[0].classList.add(fillStar)
                    i.append(star)
                }
                i.innerHTML += rate
            }
        })
    </script>
</body>
</html>