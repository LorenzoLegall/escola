<html>
    <head>
        <meta charset="UTF-8">
        <title> Resultado formulário </title>
        <style>
            body{
                background-color:beige;
                text-align:center;
                font-family:Arial, sans-serif;
                padding-top:60px;
            }
        </style>
    </head>
    <body>
        <?php

        $nome=$_POST["NOME"];
        $endereco=$_POST["ENDERECO"];
        $idade=$_POST["IDADE"];
        $sexo=$_POST["SEXO"];

        if($idade > 17 and $idade < 101){
            echo "<p> Nome: $nome </p> <br>";
            echo "<p> Minha idade é: $idade </p> <br>";
            echo "<p> Sexo: $sexo </p> <br>";
            echo "<p> Endereço: $endereco </p>";
        }
        elseif($idade > 100){
            echo "<p style='font-size:10px; padding-top:150px;'> avemaria... </p>";
        }
        else{
            echo "<p> 'MENOR DE IDADE >:(' </p> <br>";
            echo "<p> Nome: $nome </p> <br>";
            echo "<p> Minha idade é: $idade </p> <br>";
            echo "<p> Sexo: ----- </p> <br>";
            echo "<p> Endereço: ----- </p>";
        }

        ?>
    </body>
</html>