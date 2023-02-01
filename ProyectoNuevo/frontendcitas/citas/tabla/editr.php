<?php

session_start();
if (!isset($_SESSION['rol'])) {
    header('location: index.php');
} else {
    if ($_SESSION['rol'] != 1 && $_SESSION['rol'] != 2) {
        header('location: index.php');
    }
}


$id = (isset($_GET['seg'])) ? $_GET['seg'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- tabla DataTable -->
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">

    <script type="text/javascript" src="../DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <link rel="stylesheet" href="../css/bordes.css">
</head>

<nav class="nav-Container nav bg-light">
    <a class="nav-link " href="formulario.php">Registrar</a>
    <a class="nav-link" href="table.php">Tabla</a>
    <a class="nav-link" href="reporte.php">Reportes</a>

</nav>
<?php

require("../conexion.php");
    $SQL = "SELECT * FROM registros where id_folio = $id";
    $dato = mysqli_query($conn, $SQL);
    if ($dato->num_rows > 0) {
        while ($fila = mysqli_fetch_array($dato)) {

?>

        <body>

            <div class="container">
            <?php echo $fila['nombre_completo']; ?>
                <div class="border">
                    <div id="hidden-form" style="display: block;">
                        <h3>Registro secretario</h3>
                        <form action="update.php" method="post">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Atenciòn</label>
                                    <select class="form-select" name="atencion" aria-label="Default select example" require>
                                        <option value=""><?php echo $fila['contacto']; ?></option>
                                        <option value="vino">Vino</option>
                                        <option value="hablo">Hablo</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Email">Email</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleInputPassword1" class="form-label CampoNombre1" id="">Nombre Completo</label>
                                    <input class="form-control text-nombre CampoNombre" name="nombrecompleto" id="" value="<?php echo $fila['nombre_completo']; ?>" onkeyup="this.value=NumText(this.value)" require>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                    <input type="text" class="form-control" name="telefono" id="exampleInputPassword1" maxlength="10" value="<?php echo $fila['Telefono']; ?>" onkeypress="return SoloNumeros(event);" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Asunto</label>
                                    <input type="text" name="asunto" class="form-control" id="exampleInputPassword1" value="<?php echo $fila['Asunto']; ?>" onkeyup="this.value=NumText(this.value)" require>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Observaciones</label>
                                    <input type="text" name="observaciones" class="form-control" id="exampleInputPassword1" value="<?php echo $fila['Observaciones']; ?>" onkeyup="this.value=NumText(this.value)" require>
                                </div>
                                <div class="mb-3">
                                    <!-- cambiar a select -->
                                    <label for="exampleInputPassword1" class="form-label">Atendio</label>
                                    <input type="text" name="atendio" class="form-control" id="exampleInputPassword1" value="<?php echo $fila['Atendio']; ?>"  onkeyup="this.value=NumText(this.value)" require>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" color=$red-800>Enviar</button>
                        </form>

                    </div>

                </div>

            </div>
            </div>
        </body>



        <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="../js/validaciones.js"></script>
<?php
    }
}
?>

</html>