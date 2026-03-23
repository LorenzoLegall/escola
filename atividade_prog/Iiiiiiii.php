<?php

    class carro{
        public $marca;
        public $modelo;
        public $anoFabricacao;
        public $cor;
        public $velocidadeMaxima;

        public function acelerar(){
            return "O " . $this->marca . " " . $this->modelo . " está acelerando!";
        }
        public function frear(){
            return "O " . $this->marca . " " . $this->modelo . " está freando!";
        }
    }

    $porsche911 = new carro();
    $porsche911->marca = "Porsche";
    $porsche911->modelo = "911 GT3 RS";
    $porsche911->anoFabricacao = 2024;
    $porsche911->cor = "Amarelo";
    $porsche911->velocidadeMaxima = 340;

    $lancerEvo = new carro();
    $lancerEvo->marca = "Mitsubishi";
    $lancerEvo->modelo = "Lancer Evolution X";
    $lancerEvo->anoFabricacao = 2015;
    $lancerEvo->cor = "Branco";
    $lancerEvo->velocidadeMaxima = 250;

    echo "Marca: " . $porsche911->marca . "<br>";
    echo "Modelo: " . $porsche911->modelo . "<br>";
    echo "Ano de Fabricação: " . $porsche911->anoFabricacao . "<br>";
    echo "Cor: " . $porsche911->cor . "<br>";
    echo "Velocidade Máxima: " . $porsche911->velocidadeMaxima . " km/h<br><br>";
    echo $porsche911->acelerar() . "<br><br>";
    echo $porsche911->frear() . "<br<br>";

    echo "Marca: " . $lancerEvo->marca . "<br>";
    echo "Modelo: " . $lancerEvo->modelo . "<br>";
    echo "Ano de Fabricação: " . $lancerEvo->anoFabricacao . "<br>";
    echo "Cor: " . $lancerEvo->cor . "<br>";
    echo "Velocidade Máxima: " . $lancerEvo->velocidadeMaxima . " km/h<br><br>";
    echo $lancerEvo->acelerar() . "<br><br>";
    echo $lancerEvo->frear() . "<br>";

?>