/*****************************Para Ingresar correctamente el usuario es :"usuario" y la contraseña es :"contra" ****************************************************/
function ingresar(){
    let user = document.getElementById('user')
    let pass = document.getElementById('password')
    if((user.value == 'usuario')&&(pass.value == 'contra')){
        alert('ya puede ingresar')
    }else{
        alert('no puede ingresar')
    } 
}
