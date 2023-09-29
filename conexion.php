<?php
require_once __DIR__ . '/credenciales.php';


$conexion = new     mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conexion ->connect_errno){
    echo "El sitio web está experimentando problemas";
} else{
    echo "";
}

?>