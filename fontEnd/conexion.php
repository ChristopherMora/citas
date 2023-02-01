<?php
$servername = "localhost";
$database = "regis-report";
$username = "xcuser";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexión Fallida: " . mysqli_connect_error());
}
//echo "Conexión exitosa";
?>