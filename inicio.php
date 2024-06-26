<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Pelis Pop</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost","root","","curso php");
    if(mysqli_connect_errno()){
        echo "ERROR no se conecto: ". mysqli_connect_errno();
    }else{
    }
    
    ?>

<nav class="navegador" >
    <div class="logo" style="padding-top:0px; padding-left:10px;">
        <img src="./imagenes/logo.png" />
    </div>
    <ul>
        <li><h2><a href="./mostrarApi.html" style="text-decoration: none;"> Conectar API</a></h2></li>
        <li ><h2><a href="#destacados" style="text-decoration: none;">|Destacados</a></h2></li>
        <li><h2><a href="#recomendaciones" style="text-decoration: none;">|Recomendaciones</a></h2></li>
        <li><h2><a href="./registroPeliculas.html">|Registrar una Pelicula</a></h2></li>
        <li><h2><a href="./registro.php">|Registrarse</a></h2></li>
        <li><button class="btn btn-primary" style="background-color:black;"><h2 style="padding-bottom:3px;"><a href="./iniciarSesion.html">Iniciar Sesion</a></h2></buttom></li>
    </ul>
</nav>
<section class="seccion1">
    <div class="logo"><img src="./imagenes/logo.png" /></div>
    <h1 >Pelis Pop</h1>
    <h2 >Disfruta de la peli que quieras cuando quieras</h2>
</section>
<main class="container-fluid px-3 mx-0 py3- my-0">
    <div class="destacadas " id="destacados">
        <h2> Las mas Destacadas de Este Mes </h2>
        <div class="d-flex justify-content-around flex-wrap">
            <?php 
            //// Le pegamos a la base de datos directamente a la tabla Pelicula para obtener los datos////////
            $consulta = mysqli_query($conexion,"select * from pelicula ");
            while($listado = mysqli_fetch_array($consulta)){
                echo '
                <div class="card" style="width: 18rem; border:solid 1px black; margin-top:20px;">
                <h3> '.$listado['nombre'].'</h3>
                <img src="./imagenes/poster_annette.jpg" class="card-img" alt="poster_annette">
                </div>
                ';
            }
            ?>
        </div>
    </div>
    <div class="recomendaciones " id="recomendaciones">
        <h2> Recomendaciones Para Vos </h2>
        <div class="d-flex justify-content-around flex-wrap">
            <div class="card py-1" style="width: 18rem; border:solid 1px black; margin-top:20px;">
                <img src="./imagenes/poster_lanocheesjoven.webp" class="card-img" alt="poster_lanocheesjoven">
            </div>
            <div class="card py-1" style="width: 18rem; border:solid 1px black; margin-top:20px;">
                <img src="./imagenes/poster_jaws.jpg" class="card-img" alt="poster_jaws">
            </div>
            <div class="card py-1" style="width: 18rem; border:solid 1px black; margin-top:20px;">
                <img src="./imagenes/poster_luciferina.webp" class="card-img" alt="poster_luciferina">
            </div>
            <div class="card py-1" style="width: 18rem; border:solid 1px black; margin-top:20px;">
                <img src="./imagenes/poster_venom.jpg" class="card-img" alt="poster_venom">
            </div>
        </div>
    </div>
    <div class="recientes ">
        <h2> Visto Recientemente </h2>
        <div class="d-flex justify-content-around flex-wrap">
            <div class="recientes-contenedor" >
                <div class="card-reciente py-1" >
                    <img src="./imagenes/poster_theidesofmarch.jpg" class="" alt="poster_theidesofmarch">
                </div>
                <div class="card-reciente py-1" >
                    <img src="./imagenes/poster_reyesdelfuturo.webp" class="" alt="poster_reyesdelfuturo">
                </div>
                <div class="card-reciente py-1" >
                    <img src="./imagenes/poster_avengers-endgame.webp" class="" alt="poster_avengers-endgame">
                </div>
                <div class="card-reciente py-1" >
                    <img src="./imagenes/poster_cisne-negro.jpg" class="" alt="poster_cisne-negro">
                </div>
                <div class="card-reciente py-1" >
                    <img src="./imagenes/poster_fight-club.jpg" class="" alt="poster_fight-club">
                </div>
                <div class="card-reciente py-1" >
                    <img src="./imagenes/poster_the-space-between-us.jpg" class="" alt="poster_the-space-between-us">
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<footer class="my-0 py-0">
    <div class="d-flex justify-content-between flex-wrap">
        <div class="contacto" >
            <ul >
                <li><h4><a href="#"><img src="./imagenes/facebook.png" style="width:40px; height:40px;" alt="Facebook"/>   Facebook  </a></h4></li>
                <li><h4><a href="#"><img src="./imagenes/instagram.png" style="width:40px; height:40px;" alt="Instagram"/> Instagram </a></h4></li>
                <li><h4><a href="#"><img src="./imagenes/whatsapp.png" style="width:40px; height:40px;" alt="Whatsapp"/>   WhatsApp  </a></h4></li>
                <li><h4><a href="#"><img src="./imagenes/email.png" style="width:40px; height:40px;" alt="E-mail"/>        Mail      </a></h4></li>
            </ul>
        </div>
        <div class="disclaimer">
            <p>Todos los derechos reservados a nombre de jose ignacio meza, pagina creada en marzo de 2024 con fines educativos, proyecto que forma parte del curso full stack de PHP, con la plataforma Codo a Codo de la provincia de buenos aires. Esta pagina fue creada solo con fines educativos no de lucro.</p>
        </div> 
    </div>
</footer>
</html>