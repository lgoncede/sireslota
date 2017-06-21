<?php 

class miCRUD
{
	
	function __construct()
	{
		require'config_db.php';
		#Cadena de conección
		$this->cnx=mysqli_connect(HOST,USER,PASS) or die('Fallo de Conección');
		#seleccionar la DB
		mysqli_select_db($this->cnx,DB) or die('No se ha encontrado la Base de Datos');
	}

	function consultar($sql)
	{
		$res = mysqli_query($this->cnx,$sql);
		
		while($fila = mysqli_fetch_assoc($res))
		{
			$datos[] = $fila;
		}

		return $datos;
	}

	function insertar($sql)
	{
		mysqli_query($this->cnx,$sql);

		if(mysqli_affected_rows($this->cnx)<=0)
		{
			header('location:regitSorteo.php?rel=Falló');
		}
		else
		{
			header('location:regitSorteo.php?rel=Guardado');
		}
	}

	function modificar()
	{

	}

	function eliminar()
	{

	}

	function desconetar()
	{

	}
}
 ?>