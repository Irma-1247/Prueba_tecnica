<?php
$conn = mysqli_connect('localhost','root','','Registro');
$sql = 'SELECT alm_id, alm_codigo, alm_nombre, alm_edad, alm_sexo, g.grd_nombre, alm_observacion FROM alm_alumno INNER JOIN grd_grado g';
$result = mysqli_query($conn,$sql);
echo "
	<table class='table table-dark'>
		<tr>
			<th>ID</th>
			<th>Código</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Sexo</th>
			<th>Grado</th>
			<th>Observación</th>
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
			<td>".$row[4]."</td>
			<td>".$row[5]."</td>
			<td>".$row[6]."</td>
		</tr>";
}
echo "</table>";
?>