<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to right, rgb(0, 6, 69) 0%, rgb(65, 68, 255) 51%, rgb(0, 6, 69) 100%);
            color: white;
            font-size: 40px;
            font-family: cursive;
            text-align: center;
            margin-top: 100px;
        }
        p {
            margin-top: 90px;
            margin-bottom: 80px;
        }   
        a.voltar {
            color: #fff;
            border: 4px solid black;
            background: linear-gradient(95deg, rgb(0, 255, 242) 0%, rgb(0, 25, 254) 50%, rgba(0,255,242,1) 100%);
            border-radius: 20px;
            margin-top: 50px;
            margin-bottom: 50px; 
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        a.voltar:hover {
            color: black;
            background: linear-gradient(95deg, rgba(0,25,254,1) 0%, rgba(0,255,242,1) 50%, rgba(0,25,254,1) 100%);
            height: 50px;
            width: 135px;
            box-shadow: rgba(0, 0, 0, 0.5) 0px 54px 55px, rgba(0, 0, 0, 0.5) 0px -12px 30px, rgba(0, 0, 0, 0.5) 0px 4px 6px, rgba(0, 0, 0, 0.5) 0px 12px 13px, rgba(0, 0, 0, 0.5) 0px -3px 5px;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <?php
        $base = $_GET["base"];
        $expoente = $_GET["expoente"];

        echo "<strong><p> A base elevada à potência do expoente é igual a: " . pow($base, $expoente) . "</p>";
    ?>
    <a href="http://localhost/Back-End/avaliativa01/" class="voltar">Voltar</a>

</body>
</html>
