<?php

    class produto{
        public $nome;
        public $preco;
        public $quantidade;

        public function add($lolo){
            $this->quantidade += $lolo;
        }
        public function remove($lolo){
            if($lolo <= $this->quantidade){
                $this->quantidade -= $lolo;
            } else {
                return "Quantidade insuficiente para remoção.";
            }
        }
    }

    $doce_de_leite_mumu = new produto();
    $doce_de_leite_mumu->nome = "Doce de Leite Mumu";
    $doce_de_leite_mumu->preco = 15.0;
    $doce_de_leite_mumu->quantidade = 100;

    $maizena = new produto();
    $maizena->nome = "Maizena";
    $maizena->preco = 10.0;
    $maizena->quantidade = 50;

    echo "Produto: " . $doce_de_leite_mumu->nome . "<br>";
    echo "Preço: R$ " . $doce_de_leite_mumu->preco . "<br>";
    echo "Quantidade: " . $doce_de_leite_mumu->quantidade . "<br><br>";
    $doce_de_leite_mumu->add(20);
    echo "Quantidade após adição de 20 unidades: " . $doce_de_leite_mumu->quantidade . "<br>";
    $doce_de_leite_mumu->remove(30);
    echo "Quantidade após remoção de 30 unidades: " . $doce_de_leite_mumu->quantidade . "<br><br>";

    echo "Produto: " . $maizena->nome . "<br>";
    echo "Preço: R$ " . $maizena->preco . "<br>";
    echo "Quantidade: " . $maizena->quantidade . "<br><br>";
    $maizena->add(10);
    echo "Quantidade após adição de 10 unidades: " . $maizena->quantidade . "<br>";
    $maizena->remove(60);
    echo "Quantidade após remoção de 60 unidades: " . $maizena->quantidade . "<br>";

?>