<?php
session_start();
session_destroy(); // elimina todas las variables de sesion, incluida el usuario

header('Location: ../index.php');
exit(); //Terminar el script actual
?>