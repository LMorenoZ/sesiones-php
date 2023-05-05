<?php
include 'db.php';

if (isset($_POST['login'])) {
   session_start(); // se inicia la sesion
   $usuario = $_POST['usuario'];
   $contrasena = $_POST['contrasena'];

   $sql = "SELECT COUNT(*) as usuarios FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena'";
   $result_login = mysqli_query($conn, $sql);
   $array = mysqli_fetch_array($result_login);

   if($array['usuarios'] == 1) { // Solo debe haber un usuario con las mismas credenciales
      $_SESSION['usuario'] = $usuario; //Almacena el usuario dentra de la variable global $_SESSION, indicando una sesion activa
      header("Location: ../principal.php");
   } else {
      echo "datos incorrectos";
   }

} else {
   // En caso de que el usuario intente curiosear en esta pagina sin el debido proceso:
   header('Location: ../index.php');
}

?>