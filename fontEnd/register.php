<?php
include('conexion.php');

// $fecha = $_POST['fecha'];
$atencion = $_POST['atencion'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$observaciones = $_POST['observaciones'];
$atendio = $_POST['atendio'];

$nombre_completo = $nombres." ".$apellidos;

date_default_timezone_get("	America/Mexico_City");

$fecha = date('Y-m-d');

$hora = date('H:i:s');




$sql = "INSERT INTO registros(Fecha,contacto,nombre_completo, Telefono, Asunto, Observaciones, Atendio) VALUES ('$fecha','$atencion','$nombre_completo','$telefono','$asunto','$observaciones','$atendio')";

$query = mysqli_query($conn,$sql);

if($query){
    header('location: index.php');
    // echo $sql;
}else{
    header('location: index.php');
    // echo $sql;
}

mysqli_close($conn);

?>