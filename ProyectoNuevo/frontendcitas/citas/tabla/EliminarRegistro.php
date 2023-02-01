<?php
include('../conexion.php');

$eliminar = $_POST['eliminar'];
$sql= "DELETE FROM registros WHERE id_folio=$eliminar";

$result = mysqli_query($conn,$sql);



?>