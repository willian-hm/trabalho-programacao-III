<?php

$frete = 0;
$valorCompra = readline("Digite o valor gasto total de sua compra: ");

if ($valorCompra < 100) {
    $frete = 30;
} else if ($valorCompra <= 200) {
    $frete = 20;
} else {
    $frete = 0;
}

$resultado = $frete + $valorCompra;

echo "O valor do seu frete é $frete \n";
echo "O valor total de sua compra é: $resultado \n";
if ($frete > 0) {
    $freteGratis = 200 - $valorCompra;
    echo "Falta $freteGratisR$ para sua compra ficar com Frete Grátis!";
}

?>