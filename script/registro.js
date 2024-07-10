function validarClave(){
    var clave = document.getElementById('clave').value;
    var clave2 = document.getElementById('clave2').value;
    if( clave === clave2){
        return true;
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: mensaje
        });
        return false;
    }
}