var mensaje = 'Datos incompletos ingrese ';
document.getElementById('formularioRegistroPeliculas').addEventListener('submit', function(event) {
    event.preventDefault()

    const titulo = document.getElementById('titulo').value;
    const genero = document.getElementById('genero').value;
    const director = document.getElementById('director').value;
    const sinapsis = document.getElementById('sinapsis').value;
    const portada = document.getElementById('portada').value;

        if (validar(titulo, genero,director,sinapsis,portada)) {
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
                text: 'Registro de Pelicula exitoso! Pronto vas a poder visualizarla en el catalogo'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.html';
                }
            });
        }
    }   
);

function validar(titulo, genero, director, sinapsis, portada) {
    console.log(titulo, genero, director, sinapsis, portada) ;
    var retorno = false;
    if(titulo == ''){
        retorno=true;
        mensaje += 'el titulo';
    }
    if(genero == ''){
        retorno=true;
        mensaje += 'el genero';
    }
    if(director == ''){
        retorno=true;
        mensaje += 'el director';
    }
    if(sinapsis == ''){
        retorno=true;
        mensaje += 'la sinapsis';
    }
    if(portada == null){
        retorno=true;
        mensaje += 'la portada';
    }
    return retorno;
}