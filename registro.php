
<html>
	<head>
		<title>Formulario de Citas</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<?php include("includes/header.php")?>

	</head>
	<body>

<div class="container">
<div class="row">
<div class="col-md-6">
	<br><br>
		<h2>Registra tu cita</h2>
	<br>
		<form role="form" name="registro" action="php/registro.php" method="post">
		
		<div class="form-group">
		    <label for="nombreprop">Nombre del propietario</label>
		    <input type="text" class="form-control" id="nombreprop" name="nombreprop" placeholder="Nombre del propietario">
		  </div>
		  <div class="form-group">
		    <label for="nombremasc">Nombre de la mascota</label>
		    <input type="text" class="form-control" id="nombremasc" name="nombremasc" placeholder="Nombre de la mascota">
		  </div>
		  <div class="form-group">
		    <label for="tipo">Tipo de mascota</label>
		    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo de mascota">
		  </div>
		  <div class="form-group">
			<label for="servicio">Servicio solicitado</label>
			<select class="form-control" id="servicio" name="servicio">
			<option value="Consulta">Consulta</option>
			<option value="Medicina Preventiva">Medicina Preventiva</option>
			<option value="Peluqueria">Peluqueria</option>
			<option value="Imagenología">Imagenología</option>
			</select>
			</div>
			<div class="form-group">
		    <label for="direccion">Dirección</label>
		    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
		  </div>
		  <div class="form-group">
		    <label for="celular">Celular</label>
		    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
		  </div>
		  <div class="form-group">
		    <label for="fecha">Fecha de la cita</label>
		    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="dd/mm/aaaa">
		  </div>
	
		  <button type="submit" class="btn btn-success">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>