<?php
// termos de condições (|| ou) (&& e) (! não)
echo "Programa para aposentadoria \n";
$idade = 16;
$sexo = 'M';

//$criterioHomem = ($idade >= 65 && $sexo === 'M');
//$criterioMulher = ($idade >= 65 && $sexo === 'F');
//$atingiuCriterio = $criterioHomen || $criterioMulher;
//$pagouPrevidencia = true;
//$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
//echo "Pode aposentar ? ->  $podeSeAponsentar" . "\n";

if($idade >= 65 && $sexo === 'F'){
    echo "Pode se aposentar";
}else{
    echo "Faltam apenas -> " . 60 - $idade . " Anos para se aposentar se caso for Mulher." . "\n";
}
if($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar";
}else{
    echo "Faltam apenas -> " . 65 - $idade . " Anos para se aposentar se caso for Homem." . "\n";
}

// if ternario ? verdade : falso
echo $idade >= 18 ? "maior de 18 anos" : "menor de 18 anos";
?>