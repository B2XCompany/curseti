<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            color: white;
            font-family: sans-serif;
            text-decoration: none;

            --max: 1280px;
        }
        header{
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
        body{
            background: #202020;
            height: 400px;
        }
        .sep-2{
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .bt{
            color: white;
            font-size: 18px;
            padding: 5px
        }
        .login{
            padding: 8px 25px;
            border-radius: 5px;
            background: #F24C4C;
        }
    </style>
</head>
<body>
    <header>
        <div class='sep-1'>
            <a href="#"><img src='./logo.png'></a>
        </div>
        <div class='sep-2'>
            <a href="#" class='bt'>Link</a>
            <a href="#" class='bt'>Link</a>
            <a href="#" class='bt'>Link</a>
            <a href="#" class='bt login'>Entrar</a>
        </div>
    </header>
    
</body>
</html>