<?php

class Facebook{
	//Atributos
	public $nombre;
	public $edad;
	private $pass; //contraseña

	//Metodos
	public function __construct($nombre, $edad, $pass){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pass = $pass;
	}

	public function verInformacion(){
		echo "Nombre: " . $this->nombre . "<br>";
		echo "Edad: " . $this->edad . "<br>";
		$this->cambiarPass("4321");
		echo "Pass: " . $this->pass . "<br>";
		
	}

	private function cambiarPass($pass){
		$this->pass = $pass;
	}


}

$facebook = new Facebook("Oscar",29, "1234");
//echo $facebook->nombre;
//$facebook->cambiarPass("4321");
$facebook->verInformacion();
?>
