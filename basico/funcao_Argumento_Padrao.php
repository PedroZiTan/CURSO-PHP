<?php
// Function com argumento padrao
function saudacao($nome = 'Senhor(a)', $sobrenome = "Cliente"){
    echo "\nBem Vindo" .  " " . $nome . " " . $sobrenome;
}

saudacao(); //sem parametro
saudacao("Felipe", "Daniel"); //com parametro
saudacao(null);
saudacao(null, null);


function anotarPedido($comida, $bebida = "Água"){
    echo "\nPara comer: " . $comida;
    echo "Para beber: " . $bebida . "\n";
}

anotarPedido("Hamburguer");
anotarPedido("Pizza", "Refrigerante");

?>