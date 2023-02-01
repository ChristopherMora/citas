<?php
$id = (isset($_GET['seg'])) ? $_GET['seg'] : '';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- tabla DataTable -->
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">

    <script type="text/javascript" src="DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
<!-- 
    <script type="text/javascript" src="DataTables/dataTables.checkboxes.css"></script>
    <script type="text/javascript" src="DataTables/dataTables.checkboxes.min.js"></script> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>


<body>

    <div class="container">
        <table class="table table-hover" id="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Asunto</th>
                    <th>Núm. Tel</th>
                    <th>Atendió</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    require("conexion.php");
                    $SQL = "SELECT id_folio, nombre_completo, contacto, Asunto, Telefono, Atendio, Fecha FROM registros where nombre_completo = '$id' and Fecha <= CURRENT_DATE";
                    $dato = mysqli_query($conn, $SQL);
                    if ($dato->num_rows > 0) {
                      while ($fila = mysqli_fetch_array($dato)) {
                    ?>
                        <tr>
                          <td date-titulo="#"><?php echo $fila['id_folio']; ?></td>
                          <?php $id = $fila['id_folio']; ?>
                          <td date-titulo="N.serie"><?php echo $fila['nombre_completo']; ?></td>
                          <td date-titulo="Descripción"><?php echo $fila['contacto']; ?></td>
                          <td date-titulo="Marca"><?php echo $fila['Asunto']; ?></td>
                          <td date-titulo="Modelo"><?php echo $fila['Telefono']; ?></td>
                          <td date-titulo="Resguardante"><?php echo $fila['Atendio']; ?></td>
                          <td date-titulo="Estado"><?php echo $fila['Fecha']; ?></td>       
                          </tr>
            <?php
                }
            }

            ?>
            </tbody>
        </table>
    </div>
</body>


<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script>
   $(document).ready(function() {
        $('#table').DataTable({
            ordering: false,
            info: false,
            language: {
                url: 'DataTables/es-ES.json'
            },
            "bAutoWidth": false,
            order: [
                [1, 'asc']
            ]
        });
    });

</script>

</html>