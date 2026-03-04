<?php

    $numerozinhos = ["11", "111", "1111", "11111", "111111"];

    foreach ($numerozinhos as $numerinho){
        echo "$numerinho<br>";
    }

    echo "acabo<br><br>";

    unset($numerozinhos[2]);

    foreach ($numerozinhos as $numerinho){
        echo "$numerinho<br>";
    }

?>