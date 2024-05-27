/*****************************Para Ingresar correctamente el usuario es :"usuario" y la contraseña es :"contra" ****************************************************/

document.getElementById('formularioInicio').addEventListener('submit', function(event) {
    event.preventDefault()

    const user = document.getElementById('user').value;
    const pass = document.getElementById('password').value;

        if (!validar(user, pass)) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Nombre de usuario o contraseña incorrectos.'
            });
            return;
        }else{
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Inicio de sesión exitoso!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.html';
                }
            });
        }
    }   
);

function validar(user, pass) {
    const validUser = 'usuario'
    const validPass = 'contra'
    return user === validUser && pass === validPass
}
