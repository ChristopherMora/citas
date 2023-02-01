<?php
date_default_timezone_set('America/Mexico_City');
include ('conexion.php');

$month = date("m");
 $year = date("Y");

$cantidadVino = "SELECT COUNT(*) as totalVino FROM registros WHERE contacto = 'Vino'";
$resultVino = mysqli_query($conn, $cantidadVino);
$visitsVino = 0;
if (mysqli_num_rows($resultVino) > 0) {
    $row = mysqli_fetch_assoc($resultVino);
    $visitsVino = $row["totalVino"];
}

$cantidadLlamada = "SELECT COUNT(*) as totalLlamada FROM registros WHERE contacto = 'Llamada'";
$resultLlamada = mysqli_query($conn, $cantidadLlamada);
$visitsLlamada = 0;
if (mysqli_num_rows($resultLlamada) > 0) {
    $row = mysqli_fetch_assoc($resultLlamada);
    $visitsLlamada = $row["totalLlamada"];
}

$cantidadWsp = "SELECT COUNT(*) as totalWsp FROM registros WHERE contacto = 'Whatsapp'";
$resultWsp = mysqli_query($conn, $cantidadWsp);
$visitsWsp = 0;
if (mysqli_num_rows($resultWsp) > 0) {
    $row = mysqli_fetch_assoc($resultWsp);
    $visitsWsp = $row["totalWsp"];
}

$cantidadEmail = "SELECT COUNT(*) as totalEmail FROM registros WHERE contacto = 'Email'";
$resultEmail = mysqli_query($conn, $cantidadEmail);
$visitsEmail = 0;
if (mysqli_num_rows($resultEmail) > 0) {
    $row = mysqli_fetch_assoc($resultEmail);
    $visitsEmail = $row["totalEmail"];
}

$sql = "SELECT * FROM registros WHERE YEAR(Fecha) = $year";
$result = mysqli_query($conn, $sql);
$Numregistrosanual = mysqli_num_rows($result);

$sql1 = "SELECT * FROM registros WHERE MONTH(Fecha) = $month";
$result1 = mysqli_query($conn, $sql1);
$Numregistrosmensual = mysqli_num_rows($result1);

mysqli_close($conn);

return array(
    'visitsVino' => $visitsVino,
    'visitsLlamada' => $visitsLlamada,
    'visitsWsp' => $visitsWsp,
    'visitsEmail' => $visitsEmail,
    'Numregistrosanual' => $Numregistrosanual,
    'Numregistrosmensual' => $Numregistrosmensual,
)

?>

