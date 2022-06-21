document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formAsistencia").addEventListener('submit', validarFormularioAsistencia);
});

function validarFormularioAsistencia(evento) {
    evento.preventDefault();
    var facultad = document.getElementById('item_codigo').value;
    if (facultad.length == 0) {
        alert('El campo facultad esta vacio');
        return;
    }
    var nombre = document.getElementById('item_nombre').value;
    if (nombre.length == 0) {
        alert('El campo nombre esta vacio');
        return;
    }
    var apellidos = document.getElementById('item_stock').value;
    if (apellidos.length == 0) {
        alert('El campo apellidos esta vacio');
        return;
    }
    var asistencia = document.getElementById('item_stock1').value;
    if (asistencia.length == 0) {
        alert('El campo asistencia esta vacio');
        return;
    }
    var grupo = document.getElementById('item_detalle').value;
    if (grupo.length == 0) {
        alert('El campo grupo esta vacio');
        return;
    }

    this.submit();
}