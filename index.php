<?php 
include 'sys/conexao.php';

if($__EMAIL__){
    $btStart = "<a class='banner-now' href='./dashboard'>Dashboard</a>";

} else {
    $btStart = "<a class='banner-now' href='./login'>Começar agora</a>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mainn.css">
    <link rel="stylesheet" href="style/roott.css">
    <link rel="stylesheet" href="style/headerr.css">
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
    <title>CurseTI - Cursos online gratuitos com certificado</title>
</head>
<body>
    <?php require_once"components/header.php"; ?>
    <section id="banner">
        <div class='inner-banner'>
            <div class='banner-left'>
                <h1 class='banner-title'>Cursos gratuitos com certificado online</h1>
                <p class='banner-text'>Expanda seu conhecimento com todos os cursos com certificados que disponibilizamos</p>
                <?php echo $btStart; ?>
            </div>
            <div class='banner-right'>
                <div class="banner-right-top">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.9165 5.75C1.9165 4.16219 3.20369 2.875 4.7915 2.875H18.2082C19.796 2.875 21.0832 4.16219 21.0832 5.75V14.375C21.0832 15.9629 19.796 17.25 18.2082 17.25H12.4582V18.2083H14.3748C14.9041 18.2083 15.3332 18.6374 15.3332 19.1667C15.3332 19.696 14.9041 20.125 14.3748 20.125H8.62484C8.09557 20.125 7.6665 19.696 7.6665 19.1667C7.6665 18.6374 8.09557 18.2083 8.62484 18.2083H10.5415V17.25H4.7915C3.20369 17.25 1.9165 15.9629 1.9165 14.375V5.75ZM4.7915 4.79167C4.26224 4.79167 3.83317 5.22073 3.83317 5.75V14.375C3.83317 14.9043 4.26224 15.3333 4.7915 15.3333H18.2082C18.7375 15.3333 19.1665 14.9043 19.1665 14.375V5.75C19.1665 5.22073 18.7375 4.79167 18.2082 4.79167H4.7915Z" fill="#B5B5B5"/>
                    </svg>
                    <p>15 cursos gratuitos disponíveis</p>
                </div>
                <div class="banner-right-bot">
                    <p>Cursos de desenvolvimento</p>
                    <p>Cursos de SQL e NoSQL</p>
                    <p>Cursos de lógica</p>
                    <p>Cursos de IA e ML</p>
                    <p>Cursos de Gestão de TI</p>
                </div>
            </div>
        </div>
        
<svg width="1280" height="37" viewBox="0 0 1280 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1280 36.5H0L1280 0V36.5Z" fill="#5F5F5F"/>
</svg>

    </section>
    <section id="courses">
        <div id="principalCourses" class="courses">
            <div class="title-courses">
                <p>Principais cursos</p>
            </div>
            <div class="sec-courses">
                <div class="item">
                    <div class="item-img">
                        <img src="https://img-c.udemycdn.com/course/750x422/1465244_ed1a_3.jpg">
                    </div>
                    <div class="item-info">
                        <p class="item-title">Curso de programação</p>
                        <p class="item-users">300 alunos</p>
                        <div class="item-price">
                            <p class="actual-price">R$300,00</p>
                            <p class="old-price">R$400,00</p>
                        </div>
                        <div class="item-rate"></div>
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
                            <p class="actual-price">R$300,00</p>
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
                            <p class="actual-price">R$300,00</p>
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
                            <p class="actual-price">R$300,00</p>
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
                            <p class="old-price">R$400,00</p>
                            <p class="actual-price">R$300,00</p>
                        </div>
                        <div class="item-rate"></div>
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
                            <p class="actual-price">R$300,00</p>
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
                            <p class="actual-price">R$300,00</p>
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
                            <p class="actual-price">R$300,00</p>
                        </div>
                        <div class="item-rate"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="moreCourses" class="courses">
            <div class="title-courses">
                <p>Mais cursos</p>
            </div>
            <div class="sec-courses"></div>
        </div>
    </section>
    
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