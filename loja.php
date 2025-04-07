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
    <header class="w-100 p-5 mb-4 bg-primary">
        <h4 class="text-light text-center">Super Lojão</h4>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                    $menu = ["AudioVisual", "Antiguidades", "Tecnologias", "Outros"];
                                    for ($i = 0; $i < count($menu); $i++) {
                                    ?>
                                        <li><a class="dropdown-item" href="#"><?= $menu[$i] ?></a></li>
                                    <?php
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="w-75 border border-2 border-dark p-5 m-auto">
    <div class="row">
    <?php
        $produtos = ["Telefone Fixo", "Fax", "TV de Tubo", "Máquina de Escrever", "Video Cassete", "Vitrola"];
        $cor = ["text-warning", "text-danger", "text-info", "text-primary", "text-success", "text-secondary"];
        $link = [ "https://www.amazon.com.br/s?k=telefone+fixo", "https://www.amazon.com.br/s?k=fax", "https://www.amazon.com.br/s?k=tv+de+tubo", 
        "https://www.amazon.com.br/s?k=m%C3%A1quina+de+escrever", "https://www.amazon.com.br/s?k=video+cassete", "https://www.amazon.com.br/s?k=vitrola"];

        for ($i = 0; $i < count($produtos); $i++) {
            ?>
            <div class="card mx-2 my-2 btn btn-light " style="width: 18rem;">
                <a target="_blank" href="<?= $link[$i] ?>">
                    <img src="img/<?= $i ?>.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="fs-4 card-text <?= $cor[$i] ?>"><?= $produtos[$i]; ?></p>
                    </div>
                </a>
            </div>
            <?php
        }

        ?>                              
    </div>
    </main>
</body>

</html>