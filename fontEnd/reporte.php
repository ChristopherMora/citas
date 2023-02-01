<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- tabla DataTable -->
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<nav class="nav bg-light">
    <a class="nav-link active" href="formulario.php">Registrar</a>
    <a class="nav-link" href="table.php">Tabla</a>
    <a class="nav-link" href="reporte.php">Reportes</a>
</nav>
<body>
    <div class="container">
        <form action="genReporte.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">De Fecha</label>
                <input type="date" id="fecha" class="form-control" name="fecha1" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">A Fecha</label>
                <input type="date" id="fecha" class="form-control" name="fecha2" id="exampleInputEmail1">
            </div>
        </form>
    </div>

</body>

</html>