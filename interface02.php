<?php

interface Trabajador
{
	public function puedeCodificar();
	public function codifica();
	public function testea();
}


class Programador implements Trabajador
{
	public function puedeCodificar()
	{
		return true;
	}

	public function codifica()
	{
		return 'codificando';
	}

	public function testea()
	{
		return 'testeando en Centos';
	}

}	


class Testeador implements Trabajador
{       
       public function puedeCodificar()
       {       
                return false;
       }
       public function codifica()
       {
               throw new Exception('No, no puede codificar...');
       }

       public function testea()
       {
               return 'testeando en IExplorer';
       }

}       

class AdministracionDeProjectos
{
	public function procesar(Trabajador $mienbroDelStaff)
	{
		if ($mienbroDelStaff->puedeCodificar()) {
			echo $mienbroDelStaff->codifica() . PHP_EOL;
		}

		echo $mienbroDelStaff->testea(). PHP_EOL;
	}

}


$jhon = new Programador();
$juan = new Testeador();

$admin = new AdministracionDeProjectos();
$admin->procesar($jhon);
$admin->procesar($juan);

