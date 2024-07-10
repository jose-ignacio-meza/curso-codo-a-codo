<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="contenedorFormulario">
        <form id="formularioInicio" onsubmit="validar()" class="formularioInicio">
            <div>
                <div class=" bloqueFormulario">
                    <label class="textoFormulario">Usuario</label>
                    <input class=" inputFormulario" type="text" name="user" id="user" required>
                </div>
                <div class="bloqueFormulario">
                    <label class="textoFormulario">Constraseña</label>
                    <input class="inputFormulario" type="text" name="password" id="password" required>
                </div>
                <div class="botonesFormulario">
                    <button class="btn btn-primary" > <a href="index.html" style="text-decoration: none; color:white;"> Volver </a> </button>
                    <button class="btn btn-primary" > <a href="registro.html" style="text-decoration: none; color:white;"> Registrarse </a> </button>
                    <button class="btn btn-primary" type="submit"> Ingresar </button>
                </div>
            </div>
        </form>
    </div>   
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./script/inicioSesion.js"></script>
</body>
</html>