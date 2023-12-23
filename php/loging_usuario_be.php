<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
and contrasena='$contrasena'");
$validar_login_username = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$correo'
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login_email) > 0 || mysqli_num_rows($validar_login_username)){
    $_SESSION['usuario'] = $correo;
    header("location: bienvenidos.php");
    exit;
    // colocar otra url en donde dice ../index.php. mas abajo en la linea 19
    
}else{
    echo "
    <script>
        alert('Usuario o Contraseña incorrecta');
        window.location = '../index.php';   
    </script>";
};

exit;

?>