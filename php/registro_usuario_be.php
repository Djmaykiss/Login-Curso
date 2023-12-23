<?php
include 'conexion_be.php';

$id=$_POST['id'];
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
//clave oculta
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(`id`, nombre_completo, correo, usuario, contrasena)
          VALUES('$id','$nombre_completo','$correo', '$usuario', '$contrasena')";

/*verificar que el correo no se repita en la bd*/
$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
   echo 
   " <script>
   alert('El Correo ya existe');
   window.location = '../index.php';
</script>
   ";
   exit();
}

/*verificar que el usuario no se repita en la bd*/
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
   echo 
   " <script>
   alert('El usuario ya existe');
   window.location = '../index.php';
</script>
   ";
   exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
   echo 
   "<script>
         alert('Usuario Agregado Correctamente');
   window.location='../index.php';
   </script>";
   }else{
      echo '
      <script> 
          alert("Error al agregar el Usuario");
                window.location = "../index.php";
      </script>';
}

mysqli_close($conexion);


?>