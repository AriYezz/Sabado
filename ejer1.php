<?php 

//ATRIBUTOS : simples, variables o Arrays 
			// Def. del tipo del Atributo (public, private, protected)
//METODOS: ACCEDE A ATRIBUTOS CON : this->nombre

/**
* 
*/
class Persona
{
	public $nombre;
	public $apellido;
	
	public function guardar($nombre, $apellido)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido
	}

	public function mostrar()
	{
		echo $this->nombre;
		echo $this->apellido;
	}
}

$per = new Persona ();
$per->guardar("Juan", "Davila");
$per->mostrar();


 ?>