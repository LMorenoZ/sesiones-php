<?php
session_start();
if(isset($_SESSION['usuario'])) {
   // Un usuario logeado no deberia poder ver el formulario de crear usuario. Sera redireccionado
   header('Location: principal.php');
} else {
   include('shared/header.php');
?>
   
   <div class="container col-sm-12 col-md-5">
      <form class="mt-3" action="logica/register.php" method="POST">
         <div class="mb-3">
            <label for="usuario_input" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario_input" name="usuario">
         </div>
         <div class="mb-3">
            <label for="correo_input" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="correo_input" name="correo">
         </div>
         <div class="mb-3">
            <label for="contrasena_input" class="form-label">Contrasena</label>
            <input type="password" class="form-control" id="contrasena_input" name="contrasena">
         </div>
         <p class="fw-light">Ya tienes una cuenta? 
            <a href="index.php">Iniciar sesion</a>
         </p>
         <div class="mb-3 form-check">
         </div>
         <button type="submit" class="btn btn-primary" name="register">Crear usuario</button>
      </form>
   </div>

   <?php include('shared/footer.php'); ?>

<?php } ?>