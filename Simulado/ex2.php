<?php 
     $salario = readline("digite um salário mínimo: ");
     $quiloWatt = readline("digite o gasto em quilowatt da residência: ");

     $valorQuiloWatt = $quiloWatt * 0.0001;

     echo "O valor de cada QuiloWatt é de $valorQuiloWatt R$\n";

     $valorResi = $salario * $valorQuiloWatt;

     $valorResiDesc = $valorResi * 0.85;

     echo "O valor a ser pago pela residência é $valorResi R$, com o desconto de 15% ficará $valorResiDesc R$ \n";
