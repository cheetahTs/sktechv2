<?php
 require_once __DIR__ . '/credenciales.php';
include '/obtPed.php';
 session_start();
 $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
     
 if(isset($_SESSION['nombreusuario'])){
 
   $nombreUsuario=$_SESSION['nombreusuario'];
  
   $sentencia2 = $conexion ->
 query("SELECT * FROM SupU WHERE operadorN='$nombreUsuario'AND (tipoOp_Sup='usc' OR tipoOp_Sup='sup');");
 if( $fila = $sentencia2->fetch_assoc()){
 
 }else{
   header('location:iniciarSesion copy.html');
 }
 }
 
 
$query2 = "update pedido set estadoPedido='pag' where estadoPedido='nopag' and idpedido='$idpedido'";

?>
