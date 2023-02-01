<?php
include_once 'assets/src/Login/database.php';

session_start();

if (isset($_GET['cerrar_sesion'])) {
    session_unset();
    session_destroy();
}

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: inicio.html');
            break;

        case 2:
            header('location: inicio.html');
            break;

        default:
    }
}

if (isset($_POST['correo']) && isset($_POST['password'])) {
    echo $correo = $_POST['correo'];
    echo $password = $_POST['password'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE correo = :correo AND password = :password');
    $query->execute(['correo' => $correo, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);

    if ($row == true) {
        $rol = $row[5];
        echo 'correcto';
        $_SESSION['rol'] = $rol;
        $_SESSION['nombre'] = $row[1];
        $_SESSION['apellido'] = $row[2];
        switch ($rol) {
            case 1:
                header('location: inicio.html');
                break;

            case 2:
                header('location: inicio.html');
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
<html lang="en" style="--bs-primary: #9F2241;--bs-primary-rgb: 159,34,65;--bs-secondary: #BCA986;--bs-secondary-rgb: 188,169,134;--bs-success: #235B4E;--bs-success-rgb: 35,91,78;--bs-body-color: #53565A;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="icon" type="image/png" sizes="16x18" href="assets/img/LOGO16.png">
    <link rel="icon" type="image/png" sizes="32x36" href="assets/img/LOGO32.png">
    <link rel="icon" type="image/png" sizes="180x203" href="assets/img/LOGO180.png">
    <link rel="icon" type="image/png" sizes="192x216" href="assets/img/LOGO192.png">
    <link rel="icon" type="image/png" sizes="512x575" href="assets/img/LOGO512.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="bg-gradient-primary" style="background: var(--bs-gray-900);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background: url(&quot;assets/img/logoseduclogin.png&quot;) center no-repeat;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Bienvenido</h4>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="mb-3"><input class="form-control form-control-user" type="text" id="usuarioLogin" aria-describedby="emailHelp" placeholder="Escribe tu Email" name="correo"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Escribe tu contraseña" name="password"></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input checkRecordar" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Recuérdame</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: #9f2241;" onclick="guardarUsuario()">Acceder</button>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot-password.html">¿Olvidaste tu contraseña?</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/localEstorage.js"></script>
</body>

</html>