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
            border-radius: 0 5px 5px 0;
            background: linear-gradient(-210deg, #202020, #101010);
            display: flex;
            justify-content: center;
            min-height: calc(100svh - 40px);
            padding: 20px 0;
        }
        .right{
            width: 100%;
            background: #f5f5f5;
        }
        .progress-bar {
            display: flex;
            width: 100%;
            border-radius: 5px;
            height: 10px;
        }
        .progress-bar:after {
            width: var(--progress);
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
                <div class="user-data-box">
                    <div class="user-data-in">
                        <p>Certificações</p>
                    </div>
                </div>
                <div class="user-data-box">
                    <div class="user-data-in">
                        <p>Em andamento</p>
                    </div>
                </div>
                <div class="user-data-box">
                    <div class="user-data-in">
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
                            <p class="item-title">Curso de programação e sei la o que, machine learning e tals, sabe como é né? Texto comprido e meu deus do ceu lorem ipsum dolor</p>
                            <p class="item-users">300 alunos</p>
                            <div class="item-price">
                                <p class="actual-price">R$22,90</p>
                                <p class="old-price">R$219,90</p>
                            </div>
                            <div class="item-rate"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-img">
                            <img src="https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg">
                        </div>
                        <div class="item-info">
                            <p class="item-title">Curso de programação</p>
                            <p class="item-users">300 alunos</p>
                            <div class="item-price">
                                <p class="actual-price">R$15,90</p>
                                <p class="old-price">R$199,90</p>
                            </div>
                            <div class="item-rate"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-img">
                            <img src="https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg">
                        </div>
                        <div class="item-info">
                            <p class="item-title">Curso de programação</p>
                            <p class="item-users">300 alunos</p>
                            <div class="item-price">
                                <p class="actual-price">R$22,90</p>
                                <p class="old-price">R$219,90</p>
                            </div>
                            <div class="item-rate"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    <script>
        fetch("imgs/title-effect.svg")
        .then(e=>e.text())
        .then(e=>{
            let titles = document.querySelectorAll(".title-courses")

            for(i of titles){
                i.innerHTML += e
            }
        })
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