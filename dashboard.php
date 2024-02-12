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
    <link rel="shortcut icon" href="./icon.png" type="image/x-icon">
    <title>CurseTI - Dashboard</title>
    <style>
        .left{
            width: 250px;
            border-radius: 0 3px 3px 0;
            background: linear-gradient(-210deg, #202020, #101010);
            display: flex;
            justify-content: center;
            min-height: 100svh;
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
    </div>
</body>
</html>