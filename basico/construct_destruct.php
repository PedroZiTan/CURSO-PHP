<?php
//nome arquivo construct_destruct.php
class Felipe{

public $nome;
public $idade;

function __construct($novoNome, $novaIdade){
	echo "Construtor invocado !!!";
    $this->nome = $novoNome;
    $this->idade = $novaIdade;
}

function __destruct(){
	echo "E morreu";
}

public function apresentar(){
	echo "Nome: " . $this->nome . "..... Idade: " . $this->idade . "
<br>";
}}

$pessoa = new Felipe("felipe", 15);
$pessoa->apresentar();

?>