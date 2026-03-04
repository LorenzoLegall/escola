<?php

    $aluninhos = [
        ["nome" => "lorenzolegal", "nota" => 10],
        ["nome" => "bruno", "nota" => 0],
        ["nome" => "theo", "nota" => 5]
    ];

    foreach($aluninhos as $um){
        foreach($um as $mu => $nu){
            echo "$mu: $nu <br>";
        }
        echo "<br>";
    }

    echo"<br>";

    $media = 0;

    foreach($aluninhos as $AAA){
        $media += $AAA["nota"]/3;
    }

    echo "Média: $media<br><br>";

    $nota = array_column($aluninhos, "nota");
    $maior = max($nota);
    $doce_de_leite_mumu = array_search($maior, $nota);
    $arroz = $aluninhos[$doce_de_leite_mumu]["nome"];

    echo "Esse mano: '$arroz' tem a maior nota, que é: $maior";

?>