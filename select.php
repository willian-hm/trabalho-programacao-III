<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <main class="container w-75 m-5 p-3 m-auto">
        <h2 class="text-center">Formulário</h2>
        <div class="row">
            <div class="col-12 mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="col-4 mb-3">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-2 mb-3">
                <label class="form-label">Estado</label>
                <select class="form-select">
                    <option selected>-----------</option>
                    <?php
                    $estados = ["Acre","Alagoas","Amapá","Amazonas","Bahia","Ceará","Distrito Federal","Espírito Santo","Goiás","Maranhão","Mato Grosso","Mato Grosso do Sul","Minas Gerais","Pará","Paraíba","Paraná","Pernambuco","Piauí","Rio de Janeiro","Rio Grande do Norte","Rio Grande do Sul","Rondônia","Roraima","Santa Catarina","São Paulo","Sergipe","Tocantins"
                    ];

                    for ($i = 0; $i < count($estados); $i++) {
                    ?>
                    <option value="<?= $i ?>"><?= $estados[$i] ?></option>
                    <?php
                    }
                ?>
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-dark w-100">Cadastrar</button>
            </div>
        </div>
    </main>
</body>

</html>