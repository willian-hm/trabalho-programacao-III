<!-- Baseado no conjuntos de dados em anexo (tarefas.csv), crie uma página que exiba esses dados, separando as atividades "concluídas" das 
 "pendentes". Utilize formas de exibição diferentes para esses dois grupos. -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <style>
        nav {
            text-align: center;
            font-size: 30px;
        }

        .verde {
            padding: 5px;
            border-radius: 10px;
            margin-top: 5px;
        }

        .quadro {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- Declaração da matriz relatorio com a tabela -->
    <?php
    $relatorio = [
        ["id" => "1", "titulo" => "Revisar código", "descricao" => "Fazer revisão final do módulo de autenticação", "dataEntrega" => "2025-04-25", "status" => "pendente"],
        ["id" => "2", "titulo" => "Enviar relatório", "descricao" => "Relatório semanal para o gestor", "dataEntrega" => "2025-04-20", "status" => "concluído"],
        ["id" => "3", "titulo" => "Backup do sistema", "descricao" => "Fazer backup completo dos servidores", "dataEntrega" => "2025-04-18", "status" => "concluído"],
        ["id" => "4", "titulo" => "Atualizar dependências", "descricao" => "Atualizar bibliotecas PHP no projeto", "dataEntrega" => "2025-04-27", "status" => "pendente"],
        ["id" => "5", "titulo" => "Responder e-mails", "descricao" => "Responder mensagens pendentes da equipe", "dataEntrega" => "2025-04-24", "status" => "pendente"],
        ["id" => "6", "titulo" => "Reunião com cliente", "descricao" => "Apresentar protótipo inicial", "dataEntrega" => "2025-04-22", "status" => "concluído"],
        ["id" => "7", "titulo" => "Testes automatizados", "descricao" => "Criar scripts de testes para API", "dataEntrega" => "2025-04-26", "status" => "pendente"],
        ["id" => "8", "titulo" => "Planejar sprint", "descricao" => "Definir tarefas da próxima iteração", "dataEntrega" => "2025-04-28", "status" => "pendente"],
        ["id" => "9", "titulo" => "Configurar CI/CD", "descricao" => "Implementar integração contínua", "dataEntrega" => "2025-04-21", "status" => "concluído"],
        ["id" => "10", "titulo" => "Documentar endpoints", "descricao" => "Adicionar documentação da API no README", "dataEntrega" => "2025-04-23", "status" => "concluído"],
    ]
        ?>
    <header>
        <nav>
            <h1 class="mt-5">✉ Painel de tarefas</h1>
        </nav>
    </header>
    <main class="w-75 m-auto mt-5 mb-5">
        <section class="row g-3"> <!-- Usando o gap para espaçamento -->
            <?php
            for ($i = 0; $i < count($relatorio); $i++) {
                ?>
                <div class="col-6">
                    <div class="border quadro p-3">
                        <h5 class="mt-3"><?= $relatorio[$i]["titulo"] ?></h5>
                        <p><?= $relatorio[$i]["descricao"] ?></p>
                        <p><b>Entrega: </b><?= $relatorio[$i]["dataEntrega"] ?></p>
                        <span class="<?php
                        if ($relatorio[$i]["status"] == "concluído") {
                            ?> bg-success verde bg-opacity-50<?php
                        } else {
                            ?> bg-warning-subtle verde <?php
                        }
                        ?>"><?= $relatorio[$i]["status"] ?></span>
                        <p class="text-end m-1">ID: <?= $relatorio[$i]["id"] ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </section>
    </main>

</body>

</html>