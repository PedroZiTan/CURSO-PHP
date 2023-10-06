<?php
//criação da function
function imprimirMensagem(){
    echo "Ola";
    echo "Ate a proxima \n";
}

//chamar a função
imprimirMensagem();
imprimirMensagem();

$variavel = 1; // global

function trocarVariavel(){
    $variavel = 20; //local
    echo "\n" . "Durante a função; " . $variavel . "\n";
}

echo "\n" . "Antes: " .  $variavel; //global
trocarVariavel();
echo "\n" . "Depois: " . $variavel; //global

function trocarVariavelDeVerdade(){
    global $variavel; //puxar a variavel global do sistema
    $variavel = 20; //global
    echo "\n Durante a função: " . $variavel . "\n";
}

echo "\n" . "Antes: " . $variavel; //global
trocarVariavelDeVerdade();
echo "\n" . "Depois: " . $variavel;//global

?>