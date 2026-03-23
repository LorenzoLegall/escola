<?php

    class pessoa{
        public $nome;
        public $idade;
        public $genero;

        public function idadeespecifica(){
            return $this->idade . " anos, " . $this->idade * 12 . " meses e " . $this->idade * 365 . " dias";
            
        }
    }

    $lorenzolegal = new pessoa();
    $lorenzolegal->nome = "Lorenzolegal";
    $lorenzolegal->idade = 20; 
    $lorenzolegal->genero = "Masculino";

    $theofeio = new pessoa();
    $theofeio->nome = "Theofeio";
    $theofeio->idade = 22;
    $theofeio->genero = "Masculino";

    echo "Nome: " . $lorenzolegal->nome . "<br>";
    echo "Idade: " . $lorenzolegal->idade . "<br>";
    echo "Gênero: " . $lorenzolegal->genero . "<br>";
    echo "Idade Específica: " . $lorenzolegal->idadeespecifica() . "<br><br>";

    echo "Nome: " . $theofeio->nome . "<br>";
    echo "Idade: " . $theofeio->idade . "<br>";
    echo "Gênero: " . $theofeio->genero . "<br>";
    echo "Idade Específica: " . $theofeio->idadeespecifica() . "<br>";

?>