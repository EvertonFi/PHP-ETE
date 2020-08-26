<?php

    $nome = 'Everton';
    echo "Meu nome é: $nome <br>";
    $idade = 23;
    echo "Minha idade é: $idade <br>";
    $altura = 1.76;
    echo "Minha altura é: $altura<br>";
    echo "<hr>";
    
    $bool = false;

    if($bool){
        echo "Verdadeira";
    }else{
        echo "Falsa";
    }
    echo "<hr>";

    if(is_string($nome)){
        echo "Verdadeira";
    }else{
        echo "Falsa";
    }
    echo "<hr>";
    if(is_int($idade)){
        echo "Verdadeira";
    }else{
        echo "Falsa";
    }
    echo "<hr>";
    if(is_float($altura)){
        echo "Verdadeira";
    }else{
        echo "Falsa";
    }
    echo "<hr>";

    $array = [
        "Gol",
        "Uno",
        "Camaro",
        1.50,
        23,
        -200
    ];

    echo "$array[0]";

    echo "<hr>";

    $n1 = 20;
    $n2 = 35;
    echo "Resultado ".($n1 * $n2)."";