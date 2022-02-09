<?php
$conn = mysqli_connect('localhost','root','','Registro');
$sql = 'SELECT * FROM grd_grado';
$result = mysqli_query($conn,$sql);
echo "
	<table class='table table-dark'>
		<tr>
			<th>ID</th>
			<th>Materia</th>
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
		</tr>";
}
echo "</table>";
?>