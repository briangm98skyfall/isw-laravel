document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formUpdateGuardia").addEventListener('submit', validarFormularioUpdateGuardia);
});

function validarFormularioUpdateGuardia(evento1) {
    evento1.preventDefault();
    var nombre = document.getElementById('cliente_dni').value;
    if (nombre.length == 0) {
        alert('El campo nombre esta vacio');
        return;
    }
    var apellidos = document.getElementById('cliente_nombre').value;
    if (apellidos.length == 0) {
        alert('El campo apellidos esta vacio');
        return;
    }
    var facultad = document.getElementById('cliente_apellido').value;
    if (facultad.length == 0) {
        alert('El campo facultad esta vacio');
        return;
    }
    var grupo = document.getElementById('cliente_telefono').value;
    if (grupo.length == 0) {
        alert('El campo grupo esta vacio');
        return;
    }
    var fecha = document.getElementById('cliente_direccion').value;
    if (fecha.length == 0) {
        alert('El campo fecha esta vacio');
        return;
    }
    var turno = document.getElementById('cliente_direccionn').value;
    if (turno.length == 0) {
        alert('El campo turno esta vacio');
        return;
    }
    this.submit();
}