<?php

    class circulo{
        public $raio;

        public function calcularArea(){
            return pi() * pow($this->raio, 2);
        }
        public function calcularCircunferencia(){
            return 2 * pi() * $this->raio;
        }
    }

    $circulinho = new circulo();
    $circulinho->raio = 4.0;

    $circulao = new circulo();
    $circulao->raio = 10.0;

    echo "Círculo Pequeno:<br>";
    echo "Raio: " . $circulinho->raio . "<br>";
    echo "Área: " . $circulinho->calcularArea() . "<br>";
    echo "Circunferência: " . $circulinho->calcularCircunferencia() . "<br><br>";

    echo "Círculo Grande:<br>";
    echo "Raio: " . $circulao->raio . "<br>";
    echo "Área: " . $circulao->calcularArea() . "<br>";
    echo "Circunferência: " . $circulao->calcularCircunferencia() . "<br>";

?>