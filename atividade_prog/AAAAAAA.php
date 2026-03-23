<?php

    class livro{
        public $titulo;
        public $autor;
        public $numeroPaginas;
        public $anoPublicacao;
    }
    
    $DomQuixote = new livro();
    $DomQuixote->titulo = "Dom Quixote";
    $DomQuixote->autor = "Miguel de Cervantes";
    $DomQuixote->numeroPaginas = 863;
    $DomQuixote->anoPublicacao = 1605;

    $ADivinaComedia = new livro();
    $ADivinaComedia->titulo = "A Divina Comédia";
    $ADivinaComedia->autor = "Dante Alighieri";
    $ADivinaComedia->numeroPaginas = 798;
    $ADivinaComedia->anoPublicacao = 1320;

    echo "Título: " . $DomQuixote->titulo . "<br>";
    echo "Autor: " . $DomQuixote->autor . "<br>";
    echo "Número de Páginas: " . $DomQuixote->numeroPaginas . "<br>";
    echo "Ano de Publicação: " . $DomQuixote->anoPublicacao . "<br><br>";

    echo "Título: " . $ADivinaComedia->titulo . "<br>";
    echo "Autor: " . $ADivinaComedia->autor . "<br>";
    echo "Número de Páginas: " . $ADivinaComedia->numeroPaginas . "<br>";
    echo "Ano de Publicação: " . $ADivinaComedia->anoPublicacao . "<br>";

?>