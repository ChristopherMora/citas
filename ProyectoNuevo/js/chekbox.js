function activacion() {
    registro = document.getElementById('checkboxRegistro');
    menulayout = document.querySelector('.Busqueda');
    campoNombre = document.querySelector('.CampoNombre');
    campoApellido = document.querySelector('.CampoApellido');
    campoNombre1 = document.querySelector('.CampoNombre1');
    campoApellido1 = document.querySelector('.CampoApellido1');
    registro.addEventListener("change", function () {
        if (registro.checked) {
            campoNombre.style.display = 'none';
            campoApellido.style.display = 'none';
            campoNombre1.style.display = 'none';
            campoApellido1.style.display = 'none';
            menulayout.style.display = "block";
        } else {
            menulayout.style.display = "none";
            campoNombre.style.display = 'block';
            campoApellido.style.display = 'block';
            campoNombre1.style.display = 'block';
            campoApellido1.style.display = 'block';
        }
    });

}
