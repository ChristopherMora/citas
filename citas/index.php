<?php
include_once 'database.php';

session_start();

if (isset($_GET['cerrar_sesion'])) {
    session_unset();
    session_destroy();
}

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: inicio.php');
            break;

        case 2:
            header('location: inicio.php');
            break;

        default:
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);

    if ($row == true) {
        $rol = $row[5];

        $_SESSION['rol'] = $rol;
        $_SESSION['nombre'] =$row[1];
        $_SESSION['apellido'] =$row[2];
        $_SESSION['username'] =$row[3];
        switch ($rol) {
            case 1:
                header('location: inicio.php');
                break;

            case 2:
                header('location: inicio.php');
                break;
            default:
        }
    } else {
        // no existe el usuario
        echo "Nombre de usuario o contraseña incorrecto";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceso</title>
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleLogin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="src/img/iconoSeduc.webp">
</head>

<body>
  <div class="allLogin card cartaLogin" style="width: 21rem;">
    <div class="container backgroundLoginTop">
      <img class="imgLogin" src="src/img/logoLogin.webp" class="card-img-top" alt="...">
    </div>
    <div class="card-body">
      <h1 class="tituloLogin card-title">Inicio de sesión</h1>
      <form method="POST">
        <div class="mb-3 input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping" style="border-radius: 0;"><i
              class="bi bi-person"></i></span>
          <input type="text" class="form-control" id="usuarioLogin" aria-describedby="emailHelp" placeholder="Usuario"
            style="border-radius: 0;" name="username">
        </div>

        <div class="mb-3 input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping" style="border-radius: 0;"><i class="bi bi-key"></i></span>
          <input type="password" class="form-control" id="usuarioPassword" aria-describedby="emailHelp"
            placeholder="Contraseña" style="border-radius: 0;" name="password">
        </div>
        <a class="olvideMiContraseñaLink">Olvidé mi contraseña</a>


        <div id="prueba">

        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="checkRecordar form-check-input" id="exampleCheck1">
          <label class="form-check-label" id="checkRecordar" for="exampleCheck1">Recordar </label>
        </div>
        <hr>
        <button type="submit" class="btnEntrarLogin" onclick="guardarUsuario()">Entrar</button>
        <b class="dudasPreguntasButtom">
          Reporte de problemas de acceso o dudas
          <a href="index.php" class="correoDudas">soporte.tecnico@educacioncampeche.gob.mx</a>
        </b>
      </form>
    </div>
  </div>

</body>
<script src="js/localEstorage.js"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>

</html>