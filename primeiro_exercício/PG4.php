<html>
    <head>
        <meta charset="UTF-8">
        <title> Formulário </title>
        <style>
            body{
                background-color:lightcyan;
                text-align:center;
                font-family:Arial, sans-serif;
                padding-top:60px;
            }
        </style>
    </head>
    <body>
        
        <?php

            $nomeusu=$_POST["NOMEUSU"];
            $senha=$_POST["SENHA"];

            if($nomeusu == "lorenzolegal" and $senha == "lorenzolegal"){
                echo "<h1> Boas-vindas aluno $nomeusu! </h1>";
            }
            elseif($nomeusu == "bruno" and $senha == "bruno"){
                echo "<h1> Vindas (não boas) aluno $nomeusu </h1>";
            }
            elseif($nomeusu == "tony" and $senha == "tony"){
                echo "<h1> Boas-vindas querido professor $nomeusu! </h1>";
            }
            elseif($nomeusu == "jacquin" and $senha == "jacquin"){
                echo "<img src='jacquin.png'> <br> <h2> Ops... com licença. </h2>";
            }
            else{
                echo "<h1> Erro: nome de usuário ou senha incorretos. </h1>";
            }

        ?>

    </body>
</html>