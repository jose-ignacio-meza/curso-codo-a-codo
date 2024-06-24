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
            echo '
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Éxito",
                        text: "Registro de usuario exitoso! Te enviamos un mail con tus datos para ingresar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "index.html";
                        }
                    });
                </script>
                    ';
        }
        
    } ?>
    <div class="contenedorFormularioRegistro">  
        <form id="formularioRegistro" class="formularioRegistro" method="POST">
            <div class="encabezadoRegistro">
                <span> Complete con sus datos para registrarse</span>
            </div>   
            <div> 
                <div class=" bloqueFormularioRegistro">
                    <label class="textoFormularioRegistro">Nombre</label>
                    <input class=" inputFormularioRegistro" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
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
                <div class="botonesFormularioRegistro">
                    <button class="btn btn-primary" > <a href="index.html" style="text-decoration: none; color:white;"> Volver </a> </button>
                    <button class="btn btn-primary" > <a href="iniciarSesion.html" style="text-decoration: none; color:white;"> Ingresar </a> </button>
                    <button class="btn btn-primary" type="submit"> Registrarse </button>
                </div>
            </div>
        </form>
    </div> 
</body>
</html>