<!DOCTYPE html>
<html>
<head>
	<title>Prueba técnica</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Base de datos: Registro</h1>
	<h2>Tablas:</h2>
	<h4>Materias</h4>
	<button type="button" class="btn btn-primary" onclick="location='Insertar/materias.php'">Insetar</button>
	<br><br>
	<?php
	include_once('materias.php');
	?>
	<h4>Grados</h4>
	<button type="button" class="btn btn-primary">Insetar</button>
	<br><br>
	<?php
	include_once('grados.php');
	?>
	<h4>Alumnos</h4>
	<button type="button" class="btn btn-primary">Insetar</button>
	<br><br>
	<?php
	include_once('alumnos.php');
	?>
</body>
</html>