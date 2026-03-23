<?php

    class aluno{
        public $nome;
        public $numeroMatricula;
        public $nota1sem;
        public $nota2sem;
        public $media;
        public $situacao;

        public function calcularMedia(){
            $this->media = ($this->nota1sem + $this->nota2sem) / 2;
            $this->situacao = ($this->media >= 7.0) ? "Aprovado" : "Reprovado";
        }
    }

    $lorenzolegal = new aluno();
    $lorenzolegal->nome = "Lorenzolegal";
    $lorenzolegal->numeroMatricula = "20243001";
    $lorenzolegal->nota1sem = 10.0;
    $lorenzolegal->nota2sem = 9.5;
    $lorenzolegal->calcularMedia();

    $theofeio = new aluno();
    $theofeio->nome = "Theofeio";
    $theofeio->numeroMatricula = "20243002";
    $theofeio->nota1sem = 5.0;
    $theofeio->nota2sem = 6.0;
    $theofeio->calcularMedia(); 

    echo "Nome: " . $lorenzolegal->nome . "<br>";
    echo "Número de Matrícula: " . $lorenzolegal->numeroMatricula . "<br>";
    echo "Nota 1º Semestre: " . $lorenzolegal->nota1sem . "<br>";
    echo "Nota 2º Semestre: " . $lorenzolegal->nota2sem . "<br>";
    echo "Média: " . $lorenzolegal->media . "<br>";
    echo "Situação: " . $lorenzolegal->situacao . "<br><br>";

    echo "Nome: " . $theofeio->nome . "<br>";
    echo "Número de Matrícula: " . $theofeio->numeroMatricula . "<br>";
    echo "Nota 1º Semestre: " . $theofeio->nota1sem . "<br>";
    echo "Nota 2º Semestre: " . $theofeio->nota2sem . "<br>";
    echo "Média: " . $theofeio->media . "<br>";
    echo "Situação: " . $theofeio->situacao . "<br>";

?>