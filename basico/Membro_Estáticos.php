<!DOCTYPE html>
<html>
<body>

<?php
//Membros Estáticos

class A{
	public $naoStatic = "Variavel de instancia";
	public static $estatic = "Variavel estatica (classe)";
    
    public function mostrarA(){
    	echo "Não Estática = " . $this->naoStatic . "<br>";
        //tentativa 1
        echo "Estática = " . $this->estatic;
        //tentativa 2
        echo "<br>Estática = " . self::$estatic;
    }
    
    public static function mostrarStatica(){
    	echo "Estática = " . self::$estatic;
    }
} 

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStatica();// Não é a forma ideal
echo "<br>";
echo "Forma ideal para acessar a função estática";
echo "<br>";
echo A::$estatic;
echo "<br>";
A::mostrarStatica();
?> 

</body>
</html>
