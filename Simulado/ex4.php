<?php

    $num1 = readline("Digite um número inteiro para exibir a tabuada: ");

    for ($j = 1; $j < 11; $j++) {
        $result = $num1 * $j;
        echo "$num1 x $j = $result \n";
    }