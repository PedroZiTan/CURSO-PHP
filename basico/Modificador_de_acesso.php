<!DOCTYPE html>
<html>
<body>

<?php
// Modificador_de_acesso.php
class Teste{
	public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "privado";
    
	public function mostrarTeste(){
    	echo "Classe Teste - Publico = " . $this->publico . "<br>";
        echo "Classe Teste - Protegido = " . $this->protegido . "<br>";
        echo "Classe Teste - Privado = " . $this->privado . "<br>";
    }
    
    private function naoMostrar(){
    echo "Não vou Imprimir!";
    }
    
    protected function vaiPorHeranca(){
    echo "Serei Transmitido por Herança...! <br>";
    }
}

$a = new Teste();
$a->mostrarTeste();

class filhoTeste extends Teste{

	public function mostrarFilhoTeste(){
    	echo "Classe Filho Teste - " . $this->publico . "<br>";
        echo "Classe Filho Teste - " . $this->protegido . "<br>";
        
        parent::vaiPorHeranca();
    }
    
}
echo "<br>";
$filhoTeste = new filhoTeste();
$filhoTeste->mostrarFilhoTeste();

?> 

</body>
</html>
