<?php
include('db.php');
if(isset($_POST['register'])) {
   $usuario = $_POST['usuario'];
   $correo = $_POST['correo'];
   $contrasena = $_POST['contrasena'];

   $sql = "INSERT INTO `usuarios`(`usuario`, `correo`, `contrasena`) VALUES ('$usuario','$correo','$contrasena')";
   $usuario_result = mysqli_query($conn, $sql);

   if(!$usuario_result) {  // ! Solo se ejecutara en caso de que la consulta haya sido un fracaso
      die("Error al intentar crear usuario");
   }

   header('Location: ../index.php');
} else {
   header('Location: ../principal.php');
}
?>