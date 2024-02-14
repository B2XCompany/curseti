<?php
include"../../conexao.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Carregar a imagem

justLog($__EMAIL__);

if(!$_GET["curso"] or !$_GET["nome"]){
    exit;
}

$image = imagecreatefrompng('../../../imgs/base_certificado.png');

// Definir a cor do texto (neste caso, preto)
$color = imagecolorallocate($image, 0, 0, 0);
$colorH = imagecolorallocate($image, 120, 120, 120);
$colorT = imagecolorallocate($image, 150, 150, 150);

// Definir a fonte e o tamanho
$fonte = './fonte.ttf';
$font = './font.ttf';
$fontSizeCurso = 40;
$fontAluno = 20;
$fontT = 14;

$fontH = 10;

function gerarHash() {
    $partes = [];
    for($i = 0; $i < 5; $i++) {
        $partes[] = bin2hex(random_bytes(3));
    }
    return implode('-', $partes);
}


setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$data_atual = strftime('%d de %B de %Y', strtotime('today'));


// Definir a posição do texto
$xC = 66;
$yC = 280;

$xA = 66;
$yA = 590;

$xT = 66;
$yT = 615;
$yD = 640;

$xH = 830;
$xH2 = 738;
$yH = 100;
$yH2 = 120;


// O texto que você quer adicionar
$curso = $_GET["curso"];
$aluno = strtoupper($_GET["nome"]);
$tempo = "Tempo de curso: 2h";

function imagettftextwrap($image, $size, $angle, $x, $y, $color, $font, $text, $maxWidth) {
    $words = explode(' ', $text);
    $lines = array($words[0]);
    $currentLine = 0;
    for($i = 1; $i < count($words); $i++) {
        $lineSize = imagettfbbox($size, $angle, $font, $lines[$currentLine] . ' ' . $words[$i]);
        if($lineSize[2] - $lineSize[0] < $maxWidth) {
            $lines[$currentLine] .= ' ' . $words[$i];
        } else {
            $currentLine++;
            $lines[$currentLine] = $words[$i];
        }
    }

    foreach ($lines as $line) {
        imagettftext($image, $size, $angle, $x, $y, $color, $font, $line);
        $y += $size + 15; // Increment Y so the lines are below each other
    }
}

$v = gerarHash();

$image2 = imagecreatefrompng("https://chart.apis.google.com/chart?cht=qr&chl=https://c.curseti.com/$v&chs=150x150");

// Obter a largura e a altura da imagem de sobreposição
$overlay_width = imagesx($image2);
$overlay_height = imagesy($image2);

// Definir a posição onde você deseja sobrepor a imagem (neste caso, o canto superior esquerdo)
$dest_x = 1070;
$dest_y = 520;

$white = imagecolorallocate($image2, 255, 255, 255);
imagecolortransparent($image2, $white);

// Sobrepor a imagem
imagecopymerge($image, $image2, $dest_x, $dest_y, 0, 0, $overlay_width, $overlay_height, 100);

// Adicionar o texto à imagem
imagettftextwrap($image, $fontSizeCurso, 0, $xC, $yC, $color, $fonte, $curso, 1000);
imagettftextwrap($image, $fontAluno, 0, $xA, $yA, $color, $font, $aluno, 1000);
imagettftextwrap($image, $fontT, 0, $xT, $yT, $colorT, $font, $tempo, 1000);
imagettftextwrap($image, $fontT, 0, $xT, $yD, $colorT, $font, $data_atual, 1000);
imagettftextwrap($image, $fontH, 0, $xH, $yH, $colorH, $font, "N° da certificação: ".$v, 1000);
imagettftextwrap($image, $fontH, 0, $xH2, $yH2, $colorH, $font, "URL da certificação: c.curseti.com/".$v, 1000);
// Salvar a imagem
imagepng($image, "../../../imgs/certificados/$v.png");

// Limpar a memória
imagedestroy($image);

echo $v;

echo "<br><img style='width: 500px' src='../../../imgs/certificados/$v.png'/>";
?>