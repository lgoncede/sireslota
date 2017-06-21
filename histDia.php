<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	require 'miCRUD.php';
	$miCRUD = new miCRUD();
 	?>

 	<div>
 		<div class="consulIndi">
 			<form method="post" action="histDia.php">
 				<input type="date" autofocus name="fecha">
 				<input type="submit" value='Consultar' name="Consultar1">
 			
 			
 		</div>

 		<div class="consulRang">
 			
 				<br /><label for='fI'>Desde</label><input type="date"  id='fI' name="fechaIni">
 				<label for=fF>Hasta</label><input type="date"  id='fF' name="fechaFin">
 				<input type="submit" value='Consultar' name="Consultar2">
 			</form>
 			
 		</div>

 		<div>
 			<?php 
 				if(isset($_POST['Consultar1']) && !empty($_POST['fecha']))
				{
					$fecha = $_POST['fecha'];
					$f = explode('-', $fecha);
					$f_sql = $f[0].'/'.$f[1].'/'.$f[2];
					
	 				$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE fecha = '$f_sql'");
	 			?>
	 				<table border="1">
	 	<tr>
	 		<td><b>Fecha</b></td>
	 		<td><b>Hora</b></td>
	 		<td><b>Resultado</b></td>
	 		<td><b>Color</td>
	 		<td><b>Fila</b></td>
	 		<td><b>Grupo</b></td>
	 	</tr>
	 	<?php foreach($datos as $data){ ?>
	 	<tr align='center'>
	 		<td>
	 			<?php echo$data['fecha'] ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['hora']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['resultado']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['color']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['fila']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['grupo']; ?>
	 		</td>
	 	</tr>
	 	<?php } }?>
	 </table>
 		</div>

 		<div>
 			<?php 
 				if(isset($_POST['Consultar2']) && !empty($_POST['fechaIni']) && !empty($_POST['fechaFin']))
				{
					$fecha = $_POST['fechaIni'];
					$f = explode('-', $fecha);
					$f_sql1 = $f[0].'/'.$f[1].'/'.$f[2];

					$fecha = $_POST['fechaFin'];
					$f = explode('-', $fecha);
					$f_sql2 = $f[0].'/'.$f[1].'/'.$f[2];
					
	 				$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE fecha >= '$f_sql1' AND fecha <= '$f_sql2'");
	 			?>
	 				<table border="1">
	 	<tr>
	 		<td><b>Fecha</b></td>
	 		<td><b>Hora</b></td>
	 		<td><b>Resultado</b></td>
	 		<td><b>Color</td>
	 		<td><b>Fila</b></td>
	 		<td><b>Grupo</b></td>
	 	</tr>
	 	<?php foreach($datos as $data){ ?>
	 	<tr align='center'>
	 		<td>
	 			<?php echo$data['fecha'] ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['hora']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['resultado']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['color']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['fila']; ?>
	 		</td>
	 		<td>
	 			<?php echo  $data['grupo']; ?>
	 		</td>
	 	</tr>
	 	<?php } ?>
	 </table>
 		</div>
 	</div>
 	<?php } ?>
 	<a href="estadisticas.html"><img src="volver.png"></a>
</body>
</html>
