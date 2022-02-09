<?php
$conn = mysqli_connect('localhost','root','','Registro');
$sql = 'SELECT * FROM mat_materia';
$result = mysqli_query($conn,$sql);
echo "
	<table class='table table-dark'>
		<tr>
			<th>ID</th>
			<th>Materia</th>
			<th>Acciones</th>
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td><button type='button' class='btn btn-danger' onclick='location='Eliminar/materias.php'' value='".$row[0]."'>Eliminar</button></td>
		</tr>
		";
}
echo "</table>";
?>