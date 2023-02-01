<?php

include('../conexion.php');

echo $id = $_POST['id'];
echo $nombre = $_POST['nombre'];
echo "<br>";
 echo$apellido = $_POST['apellido'];
 echo "<br>";
 echo$rol_id = $_POST['rol_id'];
 echo "<br>";
 echo$username = $_POST['username'];
 echo "<br>";
 echo$password = $_POST['password'];
 echo "<br>";


$query = "UPDATE usuarios SET nombre='$nombre',apellido='$apellido',username='$username',password='$password',rol_id='$rol_id' WHERE id   =$id";

echo $query;

$resultado = mysqli_query($conn,$query);
echo '<br>';
if ($resultado) {
    header('location: crearUsuario.php');
}else{
    header('location: crearUsuario.php');
}

?>