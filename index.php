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
        }
        header{
            height: 60px;
            display: flex;
            gap: 20px;
            justify-content: space-between;
            align-items: center;
            width: calc(100% - 40px);
            padding:5px 20px;
        }
        body{
            background: #202020;
            height: 400px;
        }
        .sep-2{
            display: flex;
            gap: 10px;
        }
        .bt{
            color: white;
            font-size: 16px;
        }
        .login{
            padding: 5px 15px;
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