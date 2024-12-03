<?php

class Pessoa{

	public $nome; //Atributo

	public function falar(){//Método

		return "O meu nome é ".$this->nome;

	}

}

$Rafa = new Pessoa();
$Rafa->nome = "Rafael Duarte";
echo $Rafa->falar();

?>