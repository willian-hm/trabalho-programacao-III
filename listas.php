<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="list-group">
        <?php
            $disciplinasTerceiro = ["Português", "Matemática", "Inglês", "Física", "Química", "Biologia", "Programação 2", "Sociologia", "Geografia", "História",
            "DPI", "Ed Física", "Empreendedorismo", "Optativa"];
            
            for ($i = 0; $i < count($disciplinasTerceiro); $i++) {
            ?>
                <li class="list-group-item"><?php 
                 echo $disciplinasTerceiro[$i]; 
                ?></li>
            <?php            
            }
            ?>
    </ul>
</body>
</html>