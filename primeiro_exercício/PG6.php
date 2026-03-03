<html>
    <head>
        <meta charset="UTF-8">
        <title> Formulário </title>
        <style>
            body{
                background-color:darkseagreen;
                text-align:center;
                font-family:Arial, sans-serif;
                padding-top:60px;
            }
        </style>
    </head>
    <body>
        
        <?php

           $media=$_POST["MEDIA"];

           if($media < 1.7){
            echo "<h1 style='color:red;'>Você não poderá realizar o exame.</h1>";
           }
           elseif($media >= 7){
            echo "<h1> ok 🤠👍 </h1>";
           }
           else{
            $nota=(50-(6*$media))/4;
            echo "<h1> Você precisa tirar $nota no examekkkkk 😆 </h1>";
           }

        ?>

    </body>
</html>