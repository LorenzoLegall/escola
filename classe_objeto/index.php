<?php

    class Animal{
        public $tamanho;
        public $cor;
        public $numeroPatas;
        public $pelagem;

        public function andar(){
            echo "andando";
        }
        public function falar(){
            echo "falando";
        }
        public function comer(){
            echo "comendo";
        }
    }

    $gatoPreto = new Animal();
    $gatoPreto ->cor = "preto";
    $gatoPreto ->tamanho = "60cm";
    $gatoPreto ->numeroPatas = 4;
    $gatoPreto ->pelagem = "curta";

    echo "O gato preto tem a cor: " . $gatoPreto ->cor . "<br>";
    echo "O gato preto tem o tamanho: " . $gatoPreto ->tamanho . "<br>";
    echo "O gato preto tem o numero de patas: " . $gatoPreto ->numeroPatas . "<br>";
    echo "O gato preto tem a pelagem: " . $gatoPreto ->pelagem . "<br><br>";

    $gatoPreto -> falar(); echo "<br><br>";

    $minhatoto = new Animal();
    $minhatoto ->cor = "bege";
    $minhatoto ->tamanho = "45cm";
    $minhatoto ->numeroPatas = 4;
    $minhatoto ->pelagem = "curta";

    echo "Minha totó tem a cor: " . $minhatoto ->cor . "<br>";
    echo "Minha totó tem o tamanho: " . $minhatoto ->tamanho . "<br>";
    echo "Minha totó tem o numero de patas: " . $minhatoto ->numeroPatas . "<br>";
    echo "Minha totó tem a pelagem: " . $minhatoto ->pelagem . "<br><br>";
    $minhatoto -> falar(); echo "<br><br>";
    $minhatoto -> andar();

?>