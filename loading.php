<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loding...</title>
    <link rel="shortcut icon" href="images/Jfico.png" type="image/x-icon">
    <style>
        @font-face {
            font-family:'vontens';
            src: url('webfonts/vontens.otf');
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: vontens;
        }
        body{
            background-color:#565658;   
            display: flex;
            justify-content: center;
            align-content: center;
        }
        h1{
            position: relative;
            font-size: 40px;
            text-shadow:  10px 1px 20px black;
            color:#222;
            text-transform: uppercase;
            border-bottom: 8px solid #222;
            letter-spacing: 5px;
            line-height: 35px;
        }
        h1::before{
            content:attr(data-text);
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            color:#00A8BD;
            overflow: hidden;
            border-bottom: 8px solid #00A8BD;
            animation: animate 5s linear infinite;
        }
        div{
            margin-top: 200px;
        }
        img{
            filter: grayscale(100%);
            animation: filtration 3s linear infinite;
            transition: all 5s;
        }
        @keyframes animate{
            0%{
                width: 0%;
            }
            100%
            {
                width: 100%;
            }
        }
        @keyframes filtration{
            0%{
                filter: brightness(10%);
            }
            25%{
                filter :brightness(25%);
            }
            50%{
                filter: brightness(50%);
            }
            75%
            {
                filter: brightness(75%);
            }
            100%
            {
                filter: brightness(100%);
            }
        }
    </style>
</head>
<body>
    <div>
        <img src="images/about/logo-2019-glow.png" width="300px">
        <h1 data-text="Medlife...">Medlife...</h1>
    </div>










    <script>
       function Redirect(){
            window.location = "index.php";
        }
       setTimeout('Redirect()',6000);
    </script>
</body>
</html>