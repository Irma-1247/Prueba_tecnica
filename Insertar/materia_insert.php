<?php
//Recibiendo variables
$nombre = $_POST['mat'];

//Realizando inserción
$conn = mysqli_connect('localhost','root','','Registro');
$sql = 'INSERT INTO mat_materia(mat_nombre) VALUES ("' . $nombre .' ")';

if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">alert("Se ha insertado un nuevo registro");</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location:../index.php');
?>