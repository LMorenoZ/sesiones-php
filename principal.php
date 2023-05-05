<?php
session_start(); // Necesario para controlar la sesion
if(isset($_SESSION['usuario'])) {
   include('shared/header.php'); ?>

   <h1>Bienvenido!!!</h1>
   <a href="logica/logout.php">Cerrar sesion</a>

<?php include('shared/footer.php') ?>

<?php } 

else {
   header('Location: index.php');
}
?>