
<?php

session_start();
unset($_SESSION["nombreusuario"]);

header('location:iniciarSesion copy.html');
?>
