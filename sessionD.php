
<?php
$operadorN = $_GET['operadorN'];

 session_start();
require_once __DIR__ . '/credenciales.php';


 $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);



     
session_destroy();


?>
