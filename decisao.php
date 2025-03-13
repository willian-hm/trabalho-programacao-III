<?php
    
$nome = readline ("Estimado(a) usuário(a), digite vosso nome: ");
$idade = readline ("Agora, por obséquio, digite vossa idade: ");

echo "Seja bem-vindo(a), sr(a) $nome! \n";

//voto obrigatório
if ($idade >= 18 && $idade <= 65) {
    echo "O seu voto é obrigatório \n";
}else if ($idade >= 16 && $idade < 18 || $idade >= 65) {//opcional
    echo "O seu voto é opcional \n";
}else {
    echo "Você ainda não pode votar \n";
}
