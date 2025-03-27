<?php

    $horasTrabalhadas = readline("Digite a quantidade de horas trabalhadas: ");

    $salario = readline("digite o salário mínimo");

    $valorHora = $salario * 0.2;

    $salarioBruto = $horasTrabalhadas * $valorHora;

    $imposto = 0.03;

    $salarioReal = $salarioBruto-$imposto;

    echo "O salário a receber será: $salarioReal R$";

    