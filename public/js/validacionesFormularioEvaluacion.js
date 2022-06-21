document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formularioEvaluacion").addEventListener('submit', validarFormularioEvaluacion);
});

function validarFormularioEvaluacion(evento) {
    evento.preventDefault();
    var nombre = document.getElementById('cliente_dni').value;
    if (nombre.length == 0) {
        alert('El campo nombre esta vacio');
        return;
    }
    var apellido = document.getElementById('cliente_nombre').value;
    if (apellido.length == 0) {
        alert('El campo apellido esta vacio');
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
    var turno = document.getElementById('cliente_direccion1').value;
    if (turno.length == 0) {
        alert('El campo turno esta vacio');
        return;
    }
    var evaluacion = document.getElementById('cliente_direccion2').value;
    if (evaluacion.length == 0) {
        alert('El campo evaluacion esta vacio');
        return;
    }

    this.submit();
}