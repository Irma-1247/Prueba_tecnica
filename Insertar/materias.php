<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<h2>Ingresar materias</h2>
	<form action="materia_insert.php" method="POST">
		<div class="form-group">
			<label>Nombre de la materia:</label>
			<input type="text" name="mat" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Insertar</button>
	</form>
</body>
</html>