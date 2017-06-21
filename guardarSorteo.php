<?php 
	if(isset($_POST['btnGuar']))
	{
		require 'miCRUD.php';

		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$resultado = $_POST['resultado'];

		$f = explode('-', $fecha);
		$f_sql = $f[0].'/'.$f[1].'/'.$f[2];
		
		
		
		switch ($resultado) 
		{
			case 0:
				$miCRUD = new miCRUD();
				
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','v','0','a')";
				$miCRUD->insertar($sql);

				break;
			
			case 00:
			$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','v','0','d')";
				$miCRUD->insertar($sql);
				break;

			case 1:
					$miCRUD = new miCRUD();
					$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','1','d')";
					$miCRUD->insertar($sql);
				break;

				case 2:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','a')";
				$miCRUD->insertar($sql);
				break;

				case 3:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','c')";
				$miCRUD->insertar($sql);
				break;

				case 4:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','1','f')";
				$miCRUD->insertar($sql);
				break;

				case 5:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','2','c')";
				$miCRUD->insertar($sql);
				break;

				case 6:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','3','f')";
				$miCRUD->insertar($sql);
			
				break;
				case 7:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','1','b')";
				$miCRUD->insertar($sql);
				break;

				case 8:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','e')";
				$miCRUD->insertar($sql);
				break;

				case 9:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','a')";
				$miCRUD->insertar($sql);
				break;

				case 10:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','1','d')";
				$miCRUD->insertar($sql);
				break;
				case 11:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','b')";
				$miCRUD->insertar($sql);
				break;

				case 12:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','e')";
				$miCRUD->insertar($sql);
				break;

				case 13:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','1','d')";
				$miCRUD->insertar($sql);
				break;

				case 14:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','2','a')";
				$miCRUD->insertar($sql);
				break;

				case 15:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','3','c')";
				$miCRUD->insertar($sql);
				break;

				case 16:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','1','f')";
				$miCRUD->insertar($sql);
				break;

				case 17:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','b')";
				$miCRUD->insertar($sql);
				break;

				case 18:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','e')";
				$miCRUD->insertar($sql);
				break;

				case 19:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','1','e')";
				$miCRUD->insertar($sql);
				break;

				case 20:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','b')";
				$miCRUD->insertar($sql);
				break;
				case 21:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','f')";
				$miCRUD->insertar($sql);
				break;

				case 22:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','1','c')";
				$miCRUD->insertar($sql);
				break;

				case 23:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','2','f')";
				$miCRUD->insertar($sql);
				break;

				case 24:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','3','c')";
				$miCRUD->insertar($sql);
				break;

				case 25:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','1','d')";
				$miCRUD->insertar($sql);
				break;
				case 26:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','a')";
				$miCRUD->insertar($sql);
				break;

				case 27:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','d')";
				$miCRUD->insertar($sql);
				break;

				case 28:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','1','a')";
				$miCRUD->insertar($sql);
				break;

				case 29:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','e')";
				$miCRUD->insertar($sql);
				break;

				case 30:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','b')";
				$miCRUD->insertar($sql);
				break;

				case 31:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','1','e')";
				$miCRUD->insertar($sql);
				break;

				case 32:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','2','b')";
				$miCRUD->insertar($sql);
				break;

				case 33:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','3','f')";
				$miCRUD->insertar($sql);
				break;

				case 34:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','1','c')";
				$miCRUD->insertar($sql);
				break;

				case 35:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','n','2','a')";
				$miCRUD->insertar($sql);
				break;

				case 36:
				$miCRUD = new miCRUD();
				$sql="INSERT INTO resultados(fecha,hora,resultado,color,fila,grupo) VALUES ('$f_sql','$hora','$resultado','r','3','d')";
				$miCRUD->insertar($sql);
				break;

			default:
				header('location:regitSorteo.html');
				break;
		}
		
	}
	else
	{
		header('location:regitSorteo.html');
	}
  
 ?>