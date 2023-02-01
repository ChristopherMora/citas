<?php
include ('../conexion.php');

 $nombres = $_POST['nombre'];
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$password = $_POST['password'];
$rol_id = $_POST['rol_id'];

$consulta = "INSERT INTO usuarios(nombre, apellido, username, password, rol_id) VALUES ('$nombres','$apellido','$username','$password','$rol_id')";
$resultado = mysqli_query($conn,$consulta);

if ($resultado) {
    echo"Registrado Correctamente";
} else {
    echo "no se pudo Registrar";
}

header('location: crearUsuario.php');
