<?php

$nome = 'Fábio';
$altura = 1.87;
$peso = 90;

// calcular imc e exibir resultado

$imc = $peso/pow($altura,2);

$imc = number_format($imc,2);

echo "IMC de $nome é: $imc \n";

?>