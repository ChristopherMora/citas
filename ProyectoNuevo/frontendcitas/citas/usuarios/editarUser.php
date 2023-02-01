<?php

session_start();
if (!isset($_SESSION['rol'])) {
    header('location: ../index.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: ../index.php');
    }
}

include("../conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../src/img/iconoSeduc.webp">
    <link rel="stylesheet" href="../../css/bordes.css">
</head>

<body>

    <div class="container">
        <div class="container border">
        <h3>Editar usuario</h3>
        <form action="editUserCode.php" method="POST">
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <div class="">
                <label for="exampleInputPassword1" class="form-label">Nombres</label>
                <input type="text" value="<?php echo $row['nombre'] ?>" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                <input type="text" value="<?php echo $row['apellido'] ?>" class="form-control" name="apellido" id="apellido" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rol</label required>
                <select class="form-select" aria-label="Default select example" id="tipoUser" name="rol_id">
                    <?php 
                    if($row['rol_id'] == 1){
                        echo '
                        <option value="'.$row['rol_id'].'" selected default>Administrador</option>
                        ';
                    } else if($row['rol_id'] == 2){
                        echo '
                        <option value="'.$row['rol_id'].'" selected default>Altas</option>
                        ';
                    }  else if($row['rol_id'] == 3){
                        echo '
                        <option value="'.$row['rol_id'].'" selected default>Lector</option>
                        ';
                    }  
                    ?>
                    <option value="1">Administrador</option>
                    <option value="2">Altas</option>
                    <option value="3">Lector</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" value="<?php echo $row['username'] ?>" class="form-control" id="username" name="username"  required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="text" value="<?php echo $row['password'] ?>" class="form-control" id="password" name="password" readonly required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>           
    </div>

</body>
<script src="../../css/bootstrap/js/bootstrap.min.js"></script>
</html>