<?php

session_start();
if (isset($_SESSION['usuario'])){
    header("location: ./php/bienvenidos.php");
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- Agregar los estilos de Bootstrap -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Caveat:wght@400;500;600&family=Dancing+Script:wght@400;500;600;700&family=Eczar:wght@500&family=Kaushan+Script&family=Kumbh+Sans:wght@400;700&family=Lobster&family=M+PLUS+1p:wght@400;500;700;800&family=Noto+Sans:ital,wght@1,200;1,300;1,400;1,500&family=Pacifico&family=Permanent+Marker&family=Poppins:wght@200;400;500;600&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:wght@300&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>
<body>

    <!-- Barra de navegación -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
        </nav>

    <!-- Contenido principal -->
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="./php/loging_usuario_be.php"  method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register--> 
                <form action="./php/registro_usuario_be.php"  method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre_completo" name="nombre completo">
                    <input type="text" placeholder="Correo" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contrasena" name="contrasena">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <!--tabla de bd  =  login_register_db-->

    <!-- Agregar los scripts de Bootstrap y jQuery -->
    <script src="./main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

       <!-- Pie de página -->
       <footer>
        Desarrollado por Michael Perez | 
        <a href="https://www.markingwebs.com" target="_blank">MarkingWebs</a> | 
        <a href="https://www.linkedin.com/in/michael-alexander-perez-1643b2236/" target="_blank">LinkedIn</a>
    </footer>

</body>
</html>
