<!DOCTYPE html>
<html lang="es-mx" style="--bs-primary: #9F2241;--bs-primary-rgb: 159,34,65;--bs-secondary: #691C32;--bs-secondary-rgb: 105,28,50;--bs-info: #235B4E;--bs-info-rgb: 35,91,78;--bs-success: #10312B;--bs-success-rgb: 16,49,43;--bs-warning: #d9bb1f;--bs-warning-rgb: 217,187,31;">


<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro de audiencias</title>
    <link rel="icon" type="image/png" sizes="16x18" href="assets/img/LOGO16.png">
    <link rel="icon" type="image/png" sizes="32x36" href="assets/img/LOGO32.png">
    <link rel="icon" type="image/png" sizes="180x203" href="assets/img/LOGO180.png">
    <link rel="icon" type="image/png" sizes="192x216" href="assets/img/LOGO192.png">
    <link rel="icon" type="image/png" sizes="512x575" href="assets/img/LOGO512.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">

    <!-- tabla DataTable -->
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">

    <script type="text/javascript" src="DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>

    <script type="text/javascript" src="DataTables/dataTables.checkboxes.css"></script>
    <script type="text/javascript" src="DataTables/dataTables.checkboxes.min.js"></script>
    <link rel="stylesheet" href="css/bordes.css">
</head>
    <!-- Start: Navbar Right Links (Dark) -->
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3" style="background: var(--bs-secondary);border-color: var(--bs-secondary);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span style="font-weight: bold;"><img src="assets/img/LOGO32.png" style="margin: 0;margin-top: 0;margin-right: 8px;">REGISTRO DE SOLICITUD DE AUDICENCIAS</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">REGISTRO NUEVO</a></li>
                    <li class="nav-item"><a class="nav-link" href="table.php">LISTA DE SOLICITUDES</a></li>
                    <li class="nav-item"><a class="nav-link" href="reporte.php">GENERAR REPORTE</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- End: Navbar Right Links (Dark) -->
<body>
<div class="container">

<div class="row">
    <div class="border container col-sm-6">
        <table class="table table-hover" id="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Asunto</th>
                    <th>Núm.Tel.</th>
                    <th>Atendio</th>
                    <th>Seguimiento</th>
                </tr>

            </thead>
            <tbody>

                <tr>

                </tr>

            </tbody>
        </table>
    </div>
<!-- Start: Footer Dark -->
<footer class="text-center bg-dark">
            <div class="container text-white py-4 py-lg-5">
                <p class="mb-0" style="color: #bca986;">Copyright © 2023 SECRETARÍA DE EDUCACIÓN DEL ESTADO DE CAMPECHE</p>
            </div>
        </footer><!-- End: Footer Dark -->
    
</body>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            ordering: false,
            info: false,
            language: {
                url: 'DataTables/es-ES.json'
            },
            "bAutoWidth": false,
            processing: true,
            serverSide: true,
            sAjaxSource: 'server/serversideBien.php',
            columnsDefs: [{
                data: null
            }],


            columnDefs: [{
                targets: 0,
                checkboxes: {
                    selectRow: true
                }
            }],
            select: {
                style: 'multi'
            },
            order: [
                [1, 'asc']
            ]

        });
    });
</script>

</html>