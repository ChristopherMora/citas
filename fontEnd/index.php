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
</head>

<body>
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
    <!-- Start: Contact Form Basic -->
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4" style="font-weight: bold;font-size: 18PX;">REGISTRAR SOLICITUD DE AUDIENCIA</h2>
                            <form method="post" style="padding-right: 0px;padding-top: 0px;" action="register.php">
                                <div class="mb-3"><label class="form-label">Tipo de atención:</label><select class="form-select" name="atencion">
                                        <optgroup label="Tipo de Solicitud">
                                            <option value="Vino">Vino</option>
                                            <option value="Llamada">Llamada</option>
                                            <option value="Whatsapp">Whatsapp</option>
                                            <option value="email">Correo electrónico</option>
                                        </optgroup>
                                    </select></div>
                                <div class="mb-3"><label class="form-label">Nombres:</label><input class="form-control" type="text" name="nombres"></div>
                                <div class="mb-3"><label class="form-label">Apellidos:</label><input class="form-control" type="text" name="apellidos"></div>
                                <div class="mb-3"><label class="form-label">Teléfono:</label><input class="form-control" type="text" name="telefono"></div>
                                <div class="mb-3"><label class="form-label">Asunto:</label><input class="form-control" type="text" name="asunto"></div>
                                <div class="mb-3"><label class="form-label">Observaciones:</label><input class="form-control" type="text" name="observaciones"></div>
                                <div class="mb-3"><label class="form-label">Atendió:</label><input class="form-control" type="text" name="atendio"></div>
                                <div><button class="btn btn-primary d-block w-100" type="submit">Enviar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: Contact Form Basic -->
    <!-- Start: Footer Dark -->
    <footer class="text-center bg-dark">
            <div class="container text-white py-4 py-lg-5">
                <p class="mb-0" style="color: #bca986;">Copyright © 2023 SECRETARÍA DE EDUCACIÓN DEL ESTADO DE CAMPECHE</p>
            </div>
        </footer><!-- End: Footer Dark -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
<script>
    var today = new Date();


    var now = today.toLocaleDateString('en-US');
    console.log(now);
    document.getElementById('fecha').value = now;
    var hoy = new Date();
    var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
    console.log(hora);
    document.getElementById('hora').value = hora;
</script>

</html>