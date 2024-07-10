<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Registrarse</title>
</head>
<body>
    <?php 
        function cargarRegistro(){  //Funcion que carga el nuevo usuario a la base de datos
                var_dump($_POST);
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $celular = $_POST["celular"];
                $localidad = $_POST["localidad"];
                $email = $_POST["email"];
                $conexion = mysqli_connect("localhost","root","","curso php");
                if(mysqli_connect_errno()){
                    echo "ERROR no se conecto: ". mysqli_connect_errno();
                    return false;
                }else{
                $sql = "INSERT INTO `usuarios` (`id_usuario`,`nombre`,`apellido`,`email`,`celular`,`localidad`) VALUES ('null','".$nombre."','".$apellido."','".$email."','".$celular."','".$localidad."') ";
                mysqli_query($conexion,$sql);
                return true;
                }
        }

    if ($_POST){
        $mensaje = "Complete el campo ";
        $validar = true;
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $celular = $_POST["celular"];
        $localidad = $_POST["localidad"];
        $email = $_POST["email"];

        if( $nombre == ""){
            $mensaje .= "de su nombre, ";
            $validar = false;
        }
        if( $apellido == ""){
            $mensaje .= "de su apellido, ";
            $validar = false;
        }
        if( $celular == ""){
            $mensaje .= "de su celular, ";
            $validar = false;
        }
        if( $localidad == ""){
            $mensaje .= "de su localidad, ";
            $validar = false;
        }
        if( $email == ""){
            $mensaje .= "de su email, ";
            $validar = false;
        }
        
        if(!$validar){
            echo '
            <script>
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "'.$mensaje.'"
            });
            </script>
                ';   
        } else {
            //declaro la variable $existe, que va a ser false hasta que se encuentre un mail ya registrado
            $existe = false;
            $conexion = mysqli_connect("localhost","root","","curso php"); //me conecto a la base
            if(mysqli_connect_errno()){                                    //reviso que me conecte bien y no tenga error
                echo "ERROR no se conecto: ". mysqli_connect_errno();
            }else{
                
            }
            $consulta = mysqli_query($conexion,"select `email` from usuarios");//Consulto por los mail ya registrados
            while($listado = mysqli_fetch_array($consulta)){                //Recorro la lista de mails para comparar con el que quiero registrar
                if($listado['email'] == $email){                            //En caso de encontrar un mail identico cambio el valor de la varible $existe
                    $existe = true;
                }
            }

            if ($existe){                                                   //Pregunto si existe, en caso de ser true da un alerta de error y pregunta si se quiere enviar un mail para recuperar el acceso.
                echo'<script>
                        Swal.fire({
                            title: "Este email ya fue registrado",
                            text: "Quieres enviar un correo a '.$email.' para recuperar tu clave",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Enviar!",
                            cancelButtonText: "Volver"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: "Enviado",
                                        text: "Se envio un mail para recuperar tu acceso",
                                        icon: "success"
                                    }).then((result) =>{
                                        window.location.href ="inicio.php";
                                        });
                                } else {
                                    window.location.href ="registro.php"; 
                                }
                            });
                    </script>';
            }else{
            //En caso de seguir siendo false el valor de $existe y coincidir las claves procedo a cargar el usuario con la funcion "cargarRegistro()" que lo carga en la base, mostrar la alerta y redireccionar.
                if (cargarRegistro()){
                    echo'<script>
                            Swal.fire({
                                    title: "Listo!",
                                    text: "Se creo el usuario de '.$nombre.' ",
                                    icon: "success" 
                                        }).then((result) =>{
                                            window.location.href ="inicio.php";
                                            });
                        </script>';
                }else{
                    echo'<script>
                            Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "No se logro crear el usuario"
                            }).then =>(function() {
                                window.location.href ="inicio.php"; });
                        </script>';
                }
            }
        }   
    } ?>
    
    <div class="contenedorFormularioRegistro">  
        <form id="formularioRegistro" onsubmit="validarClave()" class="formularioRegistro" method="POST">
            <div class="encabezadoRegistro">
                <span> Complete con sus datos para registrarse</span>
            </div>   
            <div> 
                <div class=" bloqueFormularioRegistro">
                    <label class="textoFormularioRegistro">Nombre</label>
                    <input class=" inputFormularioRegistro" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="<?php if (isset($_POST['nombre'])){echo $_POST['nombre']; }?>" required>
                </div>
                <div class=" bloqueFormularioRegistro">
                    <label class="textoFormularioRegistro">Apellido</label>
                    <input class=" inputFormularioRegistro" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido" required>
                </div>
                <div class=" bloqueFormularioRegistro">
                    <label class="textoFormularioRegistro">Celular</label>
                    <input class=" inputFormularioRegistro" type="text" name="celular" id="celular" placeholder="Ingrese su numero de celular" required>
                </div>
                <div class=" bloqueFormularioRegistro">
                    <label class="textoFormularioRegistro">Localidad</label>
                    <input class=" inputFormularioRegistro" type="text" name="localidad" id="localidad" placeholder="Ingrese su Localidad" required>
                </div>
                <div class="bloqueFormularioRegistro">
                    <label class="textoFormularioRegistro">Email</label>
                    <input class="inputFormularioRegistro" type="email" name="email" id="email" placeholder="Ingrese su direccion de email" required>
                </div>
                <div class="bloqueFormularioRegistro">
                    <label class="textoFormularioRegistro">Clave</label>
                    <input class="inputFormularioRegistro" type="text" name="clave" id="clave" placeholder="Ingrese su una contraseña" required>
                    <input class="inputFormularioRegistro" type="text" name="clave2" id="clave2" placeholder="Repita su contraseña" required>
                </div>
                <div class="botonesFormularioRegistro">
                    <button class="btn btn-primary" > <a href="index.html" style="text-decoration: none; color:white;"> Volver </a> </button>
                    <button class="btn btn-primary" > <a href="iniciarSesion.html" style="text-decoration: none; color:white;"> Ingresar </a> </button>
                    <button class="btn btn-primary" type="submit"> Registrarse </button>
                </div>
            </div>
        </form>
    </div>
<script src="./script/registro.js"></script> 
</body>
</html>