<?php

ob_start()

?>

<?php
$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/estiloTabla.css">
</head>

<!-- en esta parte se puso el estilo en el el archivo por que la extension domPdf no funciona si se ponen los estilos en otroarchivos -->

<style>
	table,th,td{
		border: 1px solid black;
	}

	.imgLogo{
		width: 20%;
		float: right;
		z-index: 2;
	}

	h4{
		text-align: center;
	}

	.texto{
		font-family: Arial, Helvetica, sans-serif;
		text-align: center;
	}

	table {
		width: 100%;
		border-collapse: collapse;
	}

	th {
		background: rgb(167, 162, 205);
	}

	th{
		padding: 10px;
		font-family: Arial, Helvetica, sans-serif;
		color: white;
		font-weight: bold;
	}

	td{
		padding: 20px;
		text-align: justify;
	}

</style>

<body>
	<div class="container">
		<div class="texto">
		<img class="imgLogo" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/citas/src/img/logoGob2.png" alt="">
		<h4>AUDIENCIAS Y PETICIONES DE LA OFICINA DEL SECRETARIO</h4>
		<h3>LIC. RAÚL AARÓN POZOS LANZ</h3>
		<?php

		date_default_timezone_set("America/Mexico_City");
		setlocale(LC_TIME, 'es_ES.UTF-8');
		$fecha = strftime('%d de %B de %Y');
		?>
		<p><?php echo $fecha ?></p>
		</div>
		
		<table class="table">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">nombre</th>
					<th scope="col">contacto</th>
					<th scope="col">asunto</th>
					<th scope="col">telefono</th>
					<th scope="col">atendio</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include('conexion.php');
				
				$sql = "SELECT * FROM registros WHERE fecha BETWEEN '$fecha1' AND '$fecha2'";
				$query = mysqli_query($conn, $sql);
				if ($query->num_rows > 0) {
					while ($fila = mysqli_fetch_array($query)) {
				?>
						<tr>
							<td><?php echo $fila['id_folio']; ?></td>
							<td><?php echo $fila['nombre_completo']; ?></td>
							<td><?php echo $fila['contacto']; ?></td>
							<td><?php echo $fila['Asunto']; ?></td>
							<td><?php echo $fila['Telefono']; ?> </td>
							<td><?php echo $fila['Atendio']; ?> </td>
						</tr>
					<?php
					}
				} else {
					?>
					<tr class="text-center">
						<td colspan="16">No existen registros</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>

</body>

</html>

<?php

$html = ob_get_clean();

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
// $dompdf->setPaper('letter');
$dompdf->setPaper('A4', 'Landscape');
$dompdf->render();
$dompdf->stream("reporte.pdf", array("Attachment" => false))
?>