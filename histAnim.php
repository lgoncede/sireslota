
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php 
require 'miCRUD.php';

$miCRUD = new miCRUD();

 ?>
 <form method="post" action='histAnim.php'>
	 <div class='contPrinc'>
	 	<div>
	 		<button  name="btn0">Delfin</button>
	 	</div>
	 		
	 	<div>
	 		<button  name="btn37">Ballena</button>
	 	</div>

	 	<div>
	 		<button  name="btn1">Carnero</button>
	 	</div>

	 	<div>
	 		<button  name="btn2">Toro</button>
	 	</div>

	 	<div>
	 		<button  name="btn3">Cienpies</button>
	 	</div>

	 	<div>
	 		<button  name="btn4">Alacrán</button>
	 	</div>

	 	<div>
	 		<button  name="btn5">León</button>
	 	</div>

	 	<div>
	 		<button  name="btn6">Rana</button>
	 	</div>

	 	<div>
	 		<button  name="btn7">Perico</button>
	 	</div>

	 	<div>
	 		<button  name="btn8">Ratón</button>
	 	</div>

	 	<div>
	 		<button  name="btn9">Águila</button>
	 	</div>

	 	<div>
	 		<button  name="btn10">Tigre</button>
	 	</div>

	 	<div>
	 		<button  name="btn11">Gato</button>
	 	</div>

	 	<div>
	 		<button  name="btn12">Caballo</button>
	 	</div>

	 	<div>
	 		<button  name="btn13">Mono</button>
	 	</div>

	 	<div>
	 		<button  name="btn14">Paloma</button>
	 	</div>

	 	<div>
	 		<button  name="btn15">Zorro</button>
	 	</div>

	 	<div>
	 		<button  name="btn16">Oso</button>
	 	</div>

	 	<div>
	 		<button  name="btn17">Pavo</button>
	 	</div>

	 	<div>
	 		<button  name="btn18">Burro</button>
	 	</div>

	 	<div>
	 		<button  name="btn19">Civo</button>
	 	</div>

	 	<div>
	 		<button  name="btn20">Cochino</button>
	 	</div>

	 	<div>
	 		<button  name="btn21">Gallo</button>
	 	</div>

	 	<div>
	 		<button  name="btn22">Camello</button>
	 	</div>

	 	<div>
	 		<button  name="btn23">Cebra</button>
	 	</div>

	 	<div>
	 		<button  name="btn24">Iguana</button>
	 	</div>

	 	<div>
	 		<button  name="btn25">Gallina</button>
	 	</div>

	 	<div>
	 		<button  name="btn26">Vaca</button>
	 	</div>

	 	<div>
	 		<button  name="btn27">Perro</button>
	 	</div>

	 	<div>
	 		<button  name="btn28">Zamuro</button>
	 	</div>

	 	<div>
	 		<button  name="btn29">Elefante</button>
	 	</div>

	 	<div>
	 		<button  name="btn30">Caimán</button>
	 	</div>

	 	<div>
	 		<button  name="btn31">Lapa</button>
	 	</div>

	 	<div>
	 		<button  name="btn32">Ardilla</button>
	 	</div>

	 	<div>
	 		<button  name="btn33">Pescado</button>
	 	</div>

	 	<div>
	 		<button  name="btn34">Venado</button>
	 	</div>

	 	<div>
	 		<button  name="btn35">Jirafa</button>
	 	</div>

	 	<div>
	 		<button  name="btn36">Culebra</button>
	 	</div>
	 </div>
</form>
<?php 
 if(isset($_POST['btn0']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '0'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Delfin a salido</i> $i vecez "; }?></p> 
<?php 
if(isset($_POST['btn37']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '37'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La<i>Ballena</i> a salido $i vecez "; }?></p>

<?php 
if(isset($_POST['btn1']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '1'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Carnero</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn2']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '2'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Toro</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn3']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '3'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Cienpies</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn4']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '4'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Alacrán</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn5']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '5'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>León</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn6']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '6'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La <i>Rana</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn7']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '7'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Perico</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn8']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '8'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Ratón</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn9']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '9'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Águila</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn10']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '10'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Tigre</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn11']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '11'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Gato</i> a salido $i vecez "; }?></p> 

	 <?php 
 if(isset($_POST['btn12']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '12'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Caballo</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn13']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '13'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Mono</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn14']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '14'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La <i>Paloma</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn15']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '15'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Zorro</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn16']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '16'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Oso</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn17']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '17'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Pavo</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn18']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '18'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Burro</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn19']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '19'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Chivo</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn20']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '20'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Cochino</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn21']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '21'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Gallo</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn22']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '22'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Camello</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn23']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '23'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Cebra</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn24']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '24'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Iguana</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn25']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '25'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Gallina</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn26']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '26'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La <i>Vaca</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn27']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '27'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Perro</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn28']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '28'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Zamuro</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn29']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '29'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Elefante</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn30']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '30'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Caiman</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn31']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '31'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La <i>Lapa</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn32']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '32'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La <i>Ardilla</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn33']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '33'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Pescado</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn34']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '34'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " El <i>Venado</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn35']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '35'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La <i>Jirafa</i> a salido $i vecez "; }?></p>

	 <?php 
 if(isset($_POST['btn36']))
 { 
 	$datos = $miCRUD->consultar("SELECT * FROM resultados WHERE resultado = '36'");
 	$i = 0;
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
	 	<?php $i++;} ?>
	 </table>
	 <p><?php echo " La <i>Culebra</i> a salido $i vecez "; }?></p>
	<a href="estadisticas.html"><img src="volver.png"></a>
</body>
</html>

