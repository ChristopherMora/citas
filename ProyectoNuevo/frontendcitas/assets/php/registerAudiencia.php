<?php
include('conexion.php');

$atencion = $_POST['atencion'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$observaciones = $_POST['observaciones'];
$atendio = $_POST['atendio'];
$email = $_POST['email'];


$nombre_completo = $nombres." ".$apellidos;

date_default_timezone_set('America/Mexico_City');
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$sql = "INSERT INTO registros(Fecha,contacto,nombre_completo, Telefono, Asunto, Observaciones, Atendio) VALUES ('$fecha','$atencion','$nombre_completo','$telefono','$asunto','$observaciones','$atendio')";

$query = mysqli_query($conn,$sql);

if($query){
    header('location: ../../inicio.php');
    // echo $sql;
}else{
    header('location: ../../inicio.php');
    // echo $sql;
}

mysqli_close($conn);
