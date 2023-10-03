<?php
 
 $categoria = "LUXO";
 $carro = "";
 $preco = "";
 switch(strtolower($categoria)){
     case 'luxo': 
         $carro = "Mercedes";
         $preco = 250000;
         break;
     case 'suv': 
         $carro = "Renegade";
         $preco = 80000;
         break;
     case 'sedan': 
         $carro = "Etios";
         $preco = 55000;
         break;
        default:
            echo "você digitou errado tente novamente!!!";
            break;
     
 }
 
 echo "Carro: " . $carro . " Preço: " . $preco;
?>