    $(document).ready(function() {
    $('#dataTable').DataTable({
        ordering: false,
        info: false,
        language: {
            url: '../lib/DataTables/es-ES.json'
        },
        "bAutoWidth": false,
        processing: true,
        serverSide: true,
        sAjaxSource: '../src/server/serversideBien.php',
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
            url: "../php/tabla/editr.php",
            type: "POST",
            datatype: "json",
            data: {
                valor: id
            },

        }).done(function(msg) {
            window.location.href = "../php/tabla/editr.php?seg=" + id;
            // window.location.href = "seguimiento.php";
            // alert("id  "  + id)
        });

    });

    $(document).on("click", ".btnEliminar", function() {
        fila = $(this).closest("tr");
        id = fila.find('td:eq(0)').text();

        $.ajax({
            url: "../php/tabla/EliminarRegistro.php",
            type: "POST",
            datatype: "json",
            data: {
                eliminar: id
            },
        }).done(function(msg) {
            window.location.href = "../../tabla.php";

        });

    });
