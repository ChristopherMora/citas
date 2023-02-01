<?php
include('conexion.php');

// $fecha = $_POST['fecha'];
$atencion = strtoupper($_POST['atencion']);
$nombres = strtoupper($_POST['nombres']);
$apellidos = strtoupper($_POST['apellidos']);
if (empty($nombres) && empty($apellidos)) {
    $nombre_com = strtoupper($_POST['nombre_com']);
    $nombre_completo = $nombre_com;
} else {
    $nombre_completo = strtoupper($nombres)." ".strtoupper($apellidos);
}

$telefono = strtoupper($_POST['telefono']);
$asunto = strtoupper($_POST['asunto']);
$observaciones = strtoupper($_POST['observaciones']);
$atendio = strtoupper($_POST['atendio']);
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