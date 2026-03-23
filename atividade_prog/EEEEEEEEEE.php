<?php

    class funcionario{
        public $nome;
        public $cargo;
        public $salario;
        public $dataAdmissao;
    }

    $jorge = new funcionario();
    $jorge->nome = "Jorge Vulgo Zépikeno";
    $jorge->cargo = "Analista de Sistemas";
    $jorge->salario = 5000.00;
    $jorge->dataAdmissao = "2020-01-15";

    $neide = new funcionario();
    $neide->nome = "Neide Vulgo Devoradora de Universos";
    $neide->cargo = "Desenvolvedora de Software";
    $neide->salario = 6000.00;
    $neide->dataAdmissao = "2019-06-20";

    echo "Nome: " . $jorge->nome . "<br>";
    echo "Cargo: " . $jorge->cargo . "<br>";
    echo "Salário: R$ " . number_format($jorge->salario, 2, ',', '.') . "<br>";
    echo "Data de Admissão: " . $jorge->dataAdmissao . "<br>";
    echo "Salário Anual: R$ " . number_format($jorge->salario * 12, 2, ',', '.') . "<br><br>";

    echo "Nome: " . $neide->nome . "<br>";
    echo "Cargo: " . $neide->cargo . "<br>";
    echo "Salário: R$ " . number_format($neide->salario, 2, ',', '.') . "<br>";
    echo "Data de Admissão: " . $neide->dataAdmissao . "<br>";
    echo "Salário Anual: R$ " . number_format($neide->salario * 12, 2, ',', '.') . "<br>";

?>