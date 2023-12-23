<?php

session_start(); // Inicia la sesión antes de utilizar $_SESSION

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Debes Iniciar Sesión");
        window.location = "index.php";
    </script>
    ';
    session_destroy(); 
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Caveat:wght@400;500;600&family=Kumbh+Sans:wght@400;700&family=M+PLUS+1p:wght@400;500;700;800&family=Noto+Sans:ital,wght@1,200;1,300;1,400;1,500&family=Pacifico&family=Poppins:wght@200;400;500;600&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:wght@300&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Caveat:wght@400;500;600&family=Kumbh+Sans:wght@400;700&family=M+PLUS+1p:wght@400;500;700;800&family=Noto+Sans:ital,wght@1,200;1,300;1,400;1,500&family=Pacifico&family=Poppins:wght@200;400;500;600&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/styles/alumnos.css">
    <title>Curso de Photoshop</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Caveat:wght@400;500;600&family=Kumbh+Sans:wght@400;700&family=M+PLUS+1p:wght@400;500;700;800&family=Noto+Sans:ital,wght@1,200;1,300;1,400;1,500&family=Pacifico&family=Poppins:wght@200;400;500;600&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:wght@300&display=swap');

         body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            width: 100%;
            background-color: #4B25F5;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        h1 {
            color: #fff;
            text-align: center;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-right: 40px;
        }

        a:hover {
            background-color: #45a049;
        }

        section {
            width: 80%;
            margin: 20px 0;
        }

        iframe {
            width: 100%;
            height: 300px;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li a {
            color: black;
            display: block;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        li a:hover {
            background-color: #f5f5f5;
            color: #red;
        }

        div {
            margin-left: 20px; /* Ajusta la separación según tu preferencia */
        }

        progress {
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
    <a href="./cerrar_sesion.php" style="margin-right: 20px;">Cerrar Sesion</a>
<h1 style="margin-left: 20px;">Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
    </header>
    <section id="intro">
            <!-- Sección de introducción con un video o imagen -->
            <div>
                <h2>Bienvenido al Curso de Photoshop Online</h2>
                <!-- Puedes usar un video o una imagen para la introducción -->
     <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F61553959814822%2Fvideos%2F1103205307523615%2F&show_text=false&width=560&t=0" width="auto" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>
        </section>
    
        <section id="cursos">
            <!-- Lista de todos los cursos -->
            <h2>Tus Cursos</h2>
            <ul>
                <li><a href="/./Cursos/Curso 1.php" >Lección 1: Introducción a Photoshop</a></li>
                <li><a href="/./Cursos/Curso 2.php" >Lección 2: Herramientas Básicas de Photoshop</a></li>
                <li><a href="/./Cursos/Curso 3.php" >Lección 3: Capas y Máscaras</a></li>
               <li><a href="/./Cursos/Curso 4.php" >Lección 4: Filtros y Efectos</a></li>
               <li><a href="/./Cursos/Curso 5.php" >Lección 5: Técnicas Avanzadas de Retoque</a></li>
               <li><a href="/./Cursos/Curso 6.php" >Lección 6: Creación de Gráficos y Diseño Visual</a></li>
               <li><a href="/./Cursos/Curso 7.php" >Lección 7: Trabajo con Texturas y Tipografías</a></li>
               <li><a href="/./Cursos/Curso 8.php" >Lección 8: Principios de Diseño de Interfaces</a></li>
               <li><a href="/./Cursos/Curso 9.php" >Lección 9: #</a></li>
               <li><a href="/./Cursos/Curso 10.php" >Lección 10: #</a></li>
                <!-- Agrega más lecciones según sea necesario -->
            </ul>
        </section>
    
        <section id="progreso">
            <!-- Sección para mostrar el progreso del alumno -->
            <h2>Tu Progreso</h2>
            <p>Compleción: 30%</p> <!-- Ajusta este valor según el progreso real -->
            <progress value="30" max="100"></progress>
        </section>
</body>
</html>
