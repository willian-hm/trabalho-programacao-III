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
    <header class="bg-warning my-5 w-100 me-auto">
        <h2 class="text-center p-5">Olivide - Classificação Final</h2>
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
                $olivide = [
                    ["time" => "IFC Videira", "pontuacao" => 100, "atleta" => "Marcão"],
                    ["time" => "Lacerda", "pontuacao" => 90, "atleta" => "Oluan"],
                    ["time" => "Paula Penso", "pontuacao" => 88, "atleta" => "Paulo"],
                    ["time" => "Madre Terezinha", "pontuacao" => 65, "atleta" => "Tereza"],
                    ["time" => "Gabriel Bogoni", "pontuacao" => 10, "atleta" => "Gabriel Carlos"]
                ];


                for ($i = 0; $i < count($olivide); $i++) {
                    ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $olivide[$i]['time'] ?></td>
                        <td><?= $olivide[$i]['pontuacao'] ?></td>
                        <td><?= $olivide[$i]['atleta'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>