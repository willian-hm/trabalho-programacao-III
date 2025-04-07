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

<body class="container mt-5 w-75">
    <header class="bg-warning my-5 w-75">
        <h2 class="text center p-5">Olivide - Classificação Final</h2>
    </header>
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Time</th>
                    <th scope="col">Pontuação</th>
                    <th scope="col">Atleta</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $times = ["IFC Videira", "Lacerda", "Paula Penso", "Madre Terezinha", "Gabriel Bogoni"];
            $pontuacao = [100, 90, 88, 65, 10];
            $atletaDestaque = ["Marcão", "Oluan", "Paulo", "Tereza", "Gabriel Carlos"];

            for ($i = 0; $i < count($times); $i++) {
                ?>
                    <tr>
                        <td><?= $i + 1?></td>
                        <td><?= $times[$i] ?></td>
                        <td><?= $pontuacao[$i]?></td>
                        <td><?= $atletaDestaque[$i]?></td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </main>
</body>

</html>