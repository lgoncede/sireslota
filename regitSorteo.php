<!DOCTYPE html>
<html>
	<head>
		<title>Registrar Sorteo</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div id='contenedor'>
			<form id='frmRgstRslt' method='post' action='guardarSorteo.php'>
				<div/<label for='fecha'>Fecha</label></div>
				<div><input type="date" name="fecha" id='fecha' placeholder="año-mes-día" required autofocus></div>

				<div><label for='hora'>Hora</label></div>
				<div>
					<select id='hora' name='hora'>
						<option value="10:00">10:00 a.m</option>
						<option value="11:00">11:00 a.m</option>
						<option value="12:00">12:00 p.m</option>
						<option value="13:00">1:00 p.m</option>
						<option value="16:00">4:00 p.m</option>
						<option value="17:00">5:00 p.m</option>
						<option value="18:00">6:00 p.m</option>
						<option value="19:00">7:00 p.m</option>
					</select>
				</div>

				<div><label for='resultado'>Resultado</label></div>
				<div><input type="number" name="resultado" id='resultado' min='0' max='36' required></div>

				<div id='contBtn'>
					<div><button type='submit' name='btnGuar'>Guardar</button></div>
					<div><button type='reset' name='btnCanc'>cancelar</button></div>
				</div>
			</form>
		</div>

		<br />
		<br />
		<div><a href="index.html"><img src="volver.png"></a></div>
	</body>
</html>