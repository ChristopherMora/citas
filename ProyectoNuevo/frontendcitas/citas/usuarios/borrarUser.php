<?php 
include ("../conexion.php");
$id = $_GET['id'];

$query = "DELETE FROM usuarios WHERE id=$id";
$resultado = mysqli_query($conn,$query);

echo $query;
if ($resultado) {
    header('location: crearUsuario.php');
}else{
    header('location: crearUsuario.php');
}
?>