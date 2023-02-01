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

    <!-- <script type="text/javascript" src="DataTables/dataTables.checkboxes.css"></script>
    <script type="text/javascript" src="DataTables/dataTables.checkboxes.min.js"></script> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


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
                    <th>Opciones</th>
                </tr>

            </thead>
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
        processing: true,
        serverSide: true,
        sAjaxSource: 'server/serversideBien.php',
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
            url: "tabla/editr.php",
            type: "POST",
            datatype: "json",
            data: {
                valor: id
            },

        }).done(function(msg) {
            window.location.href = "tabla/editr.php?seg=" + id;
            // window.location.href = "seguimiento.php";
            // alert("id  "  + id)
        });

    });

    $(document).on("click", ".btnEliminar", function() {
        fila = $(this).closest("tr");
        id = fila.find('td:eq(0)').text();

        $.ajax({
            url: "tabla/EliminarRegistro.php",
            type: "POST",
            datatype: "json",
            data: {
                eliminar: id
            },
        }).done(function(msg) {
            window.location.href = "table.php";

        });

    });

</script>

</html>