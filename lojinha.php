<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Carrinho de Compras</title>
    <style>
        .table th,
        .table td {
            text-align: center;
        }

        .total {
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
    <script>
        // Função para atualizar a quantidade de um item específico
        function alterarQuantidade(id, tipo) {
            var quantidadeElemento = document.getElementById("quantidade_" + id);
            var quantidade = parseInt(quantidadeElemento.innerText);

            // Ajusta a quantidade com base no tipo (aumentar ou diminuir)
            if (tipo === "aumentar") quantidade++;
            else if (tipo === "diminuir" && quantidade > 0) quantidade--;

            // Atualiza a quantidade na tabela
            quantidadeElemento.innerText = quantidade;

            // Atualiza o total do item
            var valorUnitario = parseFloat(document.getElementById("valor_unitario_" + id).innerText.replace('R$ ', '').replace(',', '.'));
            var totalElemento = document.getElementById("total_" + id);
            totalElemento.innerText = "R$ " + (valorUnitario * quantidade).toFixed(2).replace('.', ',');

            // Atualiza o total geral
            atualizarTotal();
        }

        // Função para atualizar o total geral do carrinho
        function atualizarTotal() {
            var totalCarrinho = Array.from(document.getElementsByClassName("total_item"))
                .reduce((acc, el) => acc + parseFloat(el.innerText.replace('R$ ', '').replace(',', '.')), 0);

            // Atualiza o total do carrinho
            document.getElementById("totalCarrinho").innerText = "R$ " + totalCarrinho.toFixed(2).replace('.', ',');
        }

    </script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Carrinho de Compras</h2>

        <?php
        // Definindo o carrinho de compras
        $carrinhoCompras = [
            ["produto" => "Tigela de vidro", "marca" => "Nadir", "valorUnitario" => 19.9, "quantidade" => 0],
            ["produto" => "Copo Americano", "marca" => "Nadir", "valorUnitario" => 4.5, "quantidade" => 0],
            ["produto" => "Prato Raso", "marca" => "Oxford", "valorUnitario" => 12.9, "quantidade" => 0],
            ["produto" => "Panela de Pressão", "marca" => "Tramontina", "valorUnitario" => 149.9, "quantidade" => 0]
        ];

        // Calculando o total
        $totalCarrinho = 0;
        ?>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Produto</th>
                    <th>Marca</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($carrinhoCompras); $i++) {
                    $item = $carrinhoCompras[$i];
                    $totalItem = $item['valorUnitario'] * $item['quantidade'];
                    $totalCarrinho += $totalItem;
                    ?>
                    <tr>
                        <td><?= $item['produto']; ?></td>
                        <td><?= $item['marca']; ?></td>
                        <td>
                            <span id="quantidade_<?= $i; ?>"><?= $item['quantidade']; ?></span>
                            <button onclick="alterarQuantidade(<?= $i; ?>, 'aumentar');" class="btn btn-success"
                                style="margin-right: 5px;">+</button>
                            <button onclick="alterarQuantidade(<?= $i; ?>, 'diminuir');" class="btn btn-danger">-</button>
                        </td>
                        <td id="valor_unitario_<?= $i; ?>">R$ <?= number_format($item['valorUnitario'], 2, ',', '.'); ?>
                        </td>
                        <td id="total_<?= $i; ?>" class="total_item">R$ <?= number_format($totalItem, 2, ',', '.'); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-end">
            <p class="total">Total do Carrinho: <span id="totalCarrinho">R$
                    <?php echo number_format($totalCarrinho, 2, ',', '.'); ?></span></p>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>Parcelar em quantas vezes?</option>
                <?php
                $opcao = ["1x", "2x", "3x", "4x", "5x", "6x"];
                ?>
                <?php for ($i = 0; $i < count($opcao); $i++) { ?>
                    <option value="<?= $i ?>"><?= $opcao[$i] ?></option>
                <?php } ?>
            </select>
            <button class="btn btn-primary">Finalizar Compra</button>
        </div>
    </div>
</body>

</html>