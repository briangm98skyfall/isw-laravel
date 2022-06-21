document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formUsuario").addEventListener('submit', validarFormularioInsertUsuario);
});

function validarFormularioInsertUsuario(evento) {
    evento.preventDefault();
    var grupo = document.getElementById('usuario_dni').value;
    if (grupo.length == 0) {
        alert('El campo grupo esta vacio');
        return;
    }
    var nombre = document.getElementById('usuario_nombre').value;
    if (nombre.length == 0) {
        alert('El campo nombre esta vacio');
        return;
    }
    var apellido = document.getElementById('usuario_apellido').value;
    if (apellido.length == 0) {
        alert('El campo apellido esta vacio');
        return;
    }
    var usuario = document.getElementById('usuario_telefono').value;
    if (usuario.length == 0) {
        alert('El campo usuario esta vacio');
        return;
    }
    var categoria = document.getElementById('usuario_direccion').value;
    if (categoria.length == 0) {
        alert('El campo categoria esta vacio');
        return;
    }

    this.submit();
}