<?php 

    $cotacao = readline("Digite aqui a cotação atual do dólar: ");

do {
    echo "Selecione uma opção? \n
    1 - Real para Dólar \n
    2 - Dólar para Real \n
    3 - Sair \n";

    $opcao = readline();
    if ($opcao != 3) {
        $valor = readline("Qual valor deseja converter? ");
    }

    if ($opcao == 1) {
        $resultado = $cotacao * $valor;
        echo "O resultado do cálculo de Real para Dólar é: $resultado R$ \n";
    } else if ($opcao == 2) {
        $resultado = $valor / $cotacao;
        echo "O resultado do cálculo do Dólar para Real é: $resultado $ \n";
    } else if ($opcao == 3) {
        echo "encerrando sessão \n";
    } else {
        echo "opção inválida! \n";
    }
} while ($opcao != 3);