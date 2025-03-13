<?php
    $nome = readline("Olá, qual o seu nome? ");
    echo "Seja Bem Vindo ". $nome ." , selecione uma opção: \n";
    echo "O que desejas $nome? \n" . 
    "1 - Mensagem de boas vindas \n" .
    "2 - Mensagem Motivacional \n" .
    "3 - Um conselho \n" .
    "4 - Dar tchau\n\n";
    $numero = readline();

if ($numero == "1") {
    echo "Seja Bem Vindo $nome";
} else if ($numero == "2") {
    echo "Só se vive uma vez, então taca o fds e mete o loco";
} else if ($numero == "3") {
    echo "Não morra (opcional)";
} else if ($numero == "4") {
    echo "Tchau $nome";
} else {
    echo "Error 404!";
}