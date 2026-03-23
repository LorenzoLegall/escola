<?php

    class retangulo{
        public $comprimento;
        public $largura;

        public function calcularArea(){
            return $this->comprimento * $this->largura;
        }
        public function calcularPerimetro(){
            return 2 * ($this->comprimento + $this->largura);
        }
    }

    $marselo = new retangulo();
    $marselo->comprimento = 5.0;
    $marselo->largura = 3.0;

    $doce_de_leite_mumu = new retangulo();
    $doce_de_leite_mumu->comprimento = 10.0;
    $doce_de_leite_mumu->largura = 4.0;

    echo "Retângulo Marselo:<br>";
    echo "Comprimento: " . $marselo->comprimento . "<br>";
    echo "Largura: " . $marselo->largura . "<br>";
    echo "Área: " . $marselo->calcularArea() . "<br>";
    echo "Perímetro: " . $marselo->calcularPerimetro() . "<br><br>";

    echo "Retângulo Doce de Leite Mumu:<br>";
    echo "Comprimento: " . $doce_de_leite_mumu->comprimento . "<br>";
    echo "Largura: " . $doce_de_leite_mumu->largura . "<br>";
    echo "Área: " . $doce_de_leite_mumu->calcularArea() . "<br>";
    echo "Perímetro: " . $doce_de_leite_mumu->calcularPerimetro() . "<br>";

?>