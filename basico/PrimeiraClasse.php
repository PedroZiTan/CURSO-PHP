<?php
class Pessoa{
public $nome;
public $idade;

function apresentar(){
echo "Nome: " . $this->nome . "..... Idade " . $this->idade . "<br>";
}

}

$obj = new Pessoa(); //criação(instancia) de um objeto
$obj->nome = "Pedro Zi"; // acessando nome do objeto
$obj->idade = 18; // acessando idade do objeto

echo $obj->apresentar();

//Classe com propriedades padrão
class cliente{
public $nome = "Ânonimo";
public $idade = 18;

function apresentar(){
echo "Nome: " . $this->nome . "..... Idade " . $this->idade . "<br>";
}}

$objcli = new Cliente();
$objcli ->apresentar();

?>