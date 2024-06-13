var mensaje = 'Datos incompletos ingrese su ';
document.getElementById('formularioRegistro').addEventListener('submit', function(event) {
    event.preventDefault()

    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const celular = document.getElementById('celular').value;
    const localidad = document.getElementById('localidad').value;
    const email = document.getElementById('email').value;

        if (validar(nombre, apellido,celular,localidad,email)) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: mensaje
            });
            return;
        }else{
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Registro de usuario exitoso! Te enviamos un mail con tus datos para ingresar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.html';
                }
            });
        }
    }   
);

function validar(nombre, apellido, celular, localidad, email) {
    console.log(nombre, apellido, celular, localidad, email);
    var retorno = false;
    if(nombre == ''){
        retorno=true;
        mensaje += 'nombre';
    }
    if(apellido == ''){
        retorno=true;
        mensaje += 'apellido';
    }
    if(celular == ''){
        retorno=true;
        mensaje += 'celular';
    }
    if(localidad == ''){
        retorno=true;
        mensaje += 'localidad';
    }
    if(email == ''){
        retorno=true;
        mensaje += 'email';
    }
    return retorno;
}