<!DOCTYPE html>
<html lang="en" style="--bs-primary: #9F2241;--bs-primary-rgb: 159,34,65;--bs-secondary: #BCA986;--bs-secondary-rgb: 188,169,134;--bs-success: #235B4E;--bs-success-rgb: 35,91,78;--bs-body-color: #53565A;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="icon" type="image/png" sizes="16x18" href="assets/img/LOGO16.png">
    <link rel="icon" type="image/png" sizes="32x36" href="assets/img/LOGO32.png">
    <link rel="icon" type="image/png" sizes="180x203" href="assets/img/LOGO180.png">
    <link rel="icon" type="image/png" sizes="192x216" href="assets/img/LOGO192.png">
    <link rel="icon" type="image/png" sizes="512x575" href="assets/img/LOGO512.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- tabla DataTable -->
    <!-- <link rel="stylesheet" href="assets/DataTables/DataTables-1.13.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">   
    <script type="text/javascript" src="assets/DataTables/DataTables-1.13.1/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="assets/DataTables/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/DataTables/DataTables-1.13.1/js/dataTables.bootstrap5.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="--bs-primary: #691C32;--bs-primary-rgb: 105,28,50;background: var(--bs-dark);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon"><img class="img-fluid" src="assets/img/escudogob.png"></div>
                    <div class="text-break text-start sidebar-brand-text mx-3"><span class="text-break text-start" style="text-align: justify;">solicitud de<br>audiencias</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="solicitud.html"><i class="far fa-edit"></i><span class="text-break">Registro de solicitud</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="tabla.html"><i class="fas fa-table"></i><span>Solicitudes realizadas</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php"><i class="far fa-user-circle"></i><span>Iniciar sesión</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Registro de usuario</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="perfil.html"><i class="fas fa-user"></i><span>Perfil</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Buscar..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="perfil.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Perfil</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="assets/src/Login/cerrarSesion.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Salir</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Solicitudes realizadas</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Información de la solicitud</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                </div>
                                <div class="table-responsive table mt-2" id="" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="table">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Contacto</th>
                                                <th>Asunto</th>
                                                <th>Teléfono</th>
                                                <th>Fecha</th>
                                                <th>Atendió</th>

                                            </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span>Copyright © Secretaría de Educación del Estado de Campeche 2023</span></div>
                    </div>
                </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>



        <script>
            $(document).ready(function() {
                $('#table').DataTable({
                    ordering: false,
                    info: false,
                    language: {
                        url: 'assets/DataTables/es-ES.json'
                    },
                    "bAutoWidth": false,
                    processing: true,
                    serverSide: true,
                    sAjaxSource: 'assets/src/server/serversideBien.php',
                    "columnDefs": [{
                        "targets": -1,
                        "defaultContent": "<div class='row'> <button class='btn btn-warning btn-sm btnEditar col-6' data-toggle='tooltip>< class='material-icons'><i class='bi bi-pencil-square'></i></button><button class='btn btn-danger btn-sm btnEliminar col-6' data-toggle='tooltip>< class='material-icons'><i class='bi bi-trash'></i></button></div></div>",
                    }],

                    order: [
                        [1, 'asc']
                    ],

                });
            });

            $(document).on("click", ".btnEditar", function() {
                fila = $(this).closest("tr");
                id = fila.find('td:eq(0)').text();

                $.ajax({
                    // url: "seguimiento.php",
                    url: "assets/php/tabla/editr.php",
                    type: "POST",
                    datatype: "json",
                    data: {
                        valor: id
                    },

                }).done(function(msg) {
                    window.location.href = "assets/php/tabla/editr.php?seg=" + id;
                    // window.location.href = "seguimiento.php";
                    // alert("id  "  + id)
                });

            });

            $(document).on("click", ".btnEliminar", function() {
                fila = $(this).closest("tr");
                id = fila.find('td:eq(0)').text();

                $.ajax({
                    url: "assets/php/tabla/EliminarRegistro.php",
                    type: "POST",
                    datatype: "json",
                    data: {
                        eliminar: id
                    },
                }).done(function(msg) {
                    window.location.href = "tabla.php";

                });

            });
        </script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>

</body>

</html>