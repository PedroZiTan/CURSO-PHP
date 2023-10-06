<?php
//nome do arquivo: Funcao_Anonima
//Funcao anonima é uma function sem nome;
$soma = function($a, $z){
    return $a + $z;
};

echo $soma(1, 2);

//function callback é uma função que é passada por um parametro de uma outra função

function executar($a, $b, $funcaoCallback){
    $resultado = $funcaoCallback($a, $b);
    echo "<br>" . $a . " + " . $b . " = " . $resultado;
}

executar(20, 40, $soma);
?> 
