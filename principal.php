<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class='container mt-5 w=75'>

    <header class="bg-warning my-5 w-75">
        <h2 class="text-center p-5">Nosso Site de Vendas</h2>
    </header>

    <?php

        $idade = $_GET['idade'];
        $nome = $_GET['nome'];
        if ($idade >= 18) {
            echo "<h3>Seja bem-vindo(a) ao nosso site!<h3>";
            echo "<h3>Aqui você encontrará muita coisa. $nome dos $idade anos<h4>";
        }else {
            echo "<h1>Cai fora!!</h1>";
        }
    ?>

</body>
</html>