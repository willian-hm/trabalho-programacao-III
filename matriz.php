<?php

$olivide = [
    ["time" => "IFC Videira", "pontuacao" => 100, "atleta" => "Marcão"],
    ["time" => "Lacerda", "pontuacao" => 90, "atleta" => "Oluan"],
    ["time" => "Paula Penso", "pontuacao" => 88, "atleta" => "Paulo"],
    ["time" => "Madre Terezinha", "pontuacao" => 65, "atleta" => "Tereza"],
    ["time" => "Gabriel Bogoni", "pontuacao" => 10, "atleta" => "Gabriel Carlos"]
];

for ($i=0;$i < count($olivide);$i++) {
    echo $olivide[$i]["atleta"]."\n";
}
