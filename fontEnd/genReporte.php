<?php
$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];

$sql = "SELECT * FROM eventos WHERE fecha_inicio BETWEEN '$fecha1' AND '$fecha2'";



?>