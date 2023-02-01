<?php

session_start();
if (!isset($_SESSION['rol'])) {
  header('location: ../../index.php');
} else {
  if ($_SESSION['rol'] != 1) {
    header('location: ../../index.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inventarios</title>
  <link rel="stylesheet" href=" ../css/bootstrap/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../../src/img/iconoSeduc.webp">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../assets/DataTables/DataTables-1.13.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/bordes.css">
  <link rel="stylesheet" href="../../assets/DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">
  <script type="text/javascript" src="../../assets/DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="../../assets/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../../assets/DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
</head>


<body>

  <div class="container">
    <div class="border">
      <h3>Crear usuario</h3>
      <form action="crearusuariocode.php" method="POST">
        <div class="row">

          <div class="col-sm-6">
            <label for="exampleInputPassword1" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
          </div>
          <div class="col-sm-6">
            <label for="exampleInputPassword1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellido" id="apellido" required>
          </div>
          <div class="col-sm-4">
            <label for="exampleInputEmail1" class="form-label">Rol</label   >
            <select class="form-select" aria-label="Default select example" id="tipoUser" name="rol_id" require>
              <option selected>Selecciona</option>
              <option value="1">Administrador</option>
              <option value="2">Secretario/a</option>
            </select>
          </div>

          <div class="col-sm-4">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="col-sm-4">
            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="password" name="password" required>
          </div>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>

  <div class="container col-12">
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "inventario");
    $where = "";
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];
      if (isset($_GET['busqueda'])) {
        $where = "WHERE user.correo LIKE'%" . $busqueda . "%' OR nombre  LIKE'%" . $busqueda . "%'
      OR telefono  LIKE'%" . $busqueda . "%'";
      }
    }
    ?>
    <br>
    <br>
    <div class="border">
      <table class="table table-hover table_id " id="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>usuario</th>
            <th>Contraseña</th>
            <th>Permisos</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require("../conexion.php");
          $SQL = "SELECT * FROM usuarios $where order by id desc";
          $dato = mysqli_query($conn, $SQL);
          if ($dato->num_rows > 0) {
            while ($fila = mysqli_fetch_array($dato)) {
          ?>
              <tr>
                <td date-usuario="#"><?php echo $fila['id']; ?></td>
                <?php $id = $fila['id']; ?>
                <td date-usuario="Nombre"><?php echo $fila['nombre']; ?></td>
                <td date-usuario="Apellido"><?php echo $fila['apellido']; ?></td>
                <td date-usuario="Usuario"><?php echo $fila['username']; ?></td>
                <td date-usuario="Contraseña"><?php echo $fila['password']; ?> </td>
                <td date-usuario="Nivel">
                  <?php if ($fila['rol_id'] == 1) {
                    echo "Administrador";
                  } else if ($fila['rol_id'] == 2) {
                    echo "Altas";
                  }
                  if ($fila['rol_id'] == 3) {
                    echo "Lector";
                  } ?>
                </td>
                <td class="botonesTablas">
                  <?php
                  if ($_SESSION['rol'] == 1) {
                    echo '
                  <a class="btn btn-warning" href="editarUser.php?id=' . $id . '"><i class="bi bi-pencil-square" style="color: black;"></i></a>
                  <a class="btn btn-danger" href="borrarUser.php?id=' . $id . '"><i class="bi bi-trash"></i> </a>
                  ';
                  } else {
                    echo '
                ';
                  }
                  ?>
                </td>

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
    <br><br>
  </div>
</body>
<script>
  $(document).ready(function() {
    $('#table').DataTable({
      ordering: false,
      info: false,
      paging: false,
      language: {
        url: '../../assets/DataTables/es-ES.json'
      },
      "bAutoWidth": false,
    });
  });
</script>
<script src="../js/registroUsuario.js"></script>
<script src="../../css/bootstrap/js/bootstrap.min.js"></script>

</html>