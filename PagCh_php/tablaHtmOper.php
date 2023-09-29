<?php
require_once __DIR__ . '/credenciales.php';

 session_start();
 $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);



     
 if(isset($_SESSION['nombreusuario'])){

   $nombreUsuario=$_SESSION['nombreusuario'];
  
   $sentencia2 = $conexion ->
 query("SELECT * FROM SupU WHERE operadorN='$nombreUsuario'AND tipoOp_Sup='sup';");
 if( $fila = $sentencia2->fetch_assoc()){
  echo "<h1 style='font-size: 150%;'>Bienvenido: $nombreUsuario</h1>";

 }else{
   header('location:iniciarSesion copy.html');
 }
 }

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="iniciarSesion%20copy.html">Iniciar Sesion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/paginachota2/PagCh_php/tablaHtmProduc.php">Administrar Productos</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/paginachota2/PagCh_php/tablaHtm.php">Administrar Listado</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="https://www.happyland.com.mx/">About the Inspiration</a>
      </li>
      <li class="nav-item">
      <form action="sessionD.php" method="post">
            <input style="position: absolute;
            top: 15%; right: 1%;
            "  class="btn btn-warning" type="submit" value="Cerrar Sesión" name="btncerrar" />
            </form>
      </li>
  
    </ul>
  </div>
</nav>
<body>
 <div class="row" style="
padding-left: 1%;
 padding-top: 1%; 
  width: 75%;
 
  border: 2px solid gray;
  border-radius: 5px;

        ">

    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-striped">  <tbody>
       <thead class="thead-dark">
       
         <th style="width:10%;">Numero Colaborador</th>
         <th>Nombre Colaborador</th>
         <th>Tipo</th>
         <th style="width:15%;">U-D</th>
                 <?php

                 include "conexion.php";
                 $sql=$conexion->query("select * from supU ORDER BY numeroOp DESC");
                 while($datos=$sql->fetch_object()){ ?>

                        <tr>
                        <td><?= $datos->numeroOp ?></td>
                        <td><?= $datos->operadorN ?></td>
                        <td><?= $datos->tipoOp_Sup ?></td>
                     
                        
                        <td>
                            <a style="padding:1%" href="http://localhost/paginachota2/UpdateOp.php?numeroOp=<?= $datos->numeroOp ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"> Edit</i></a>
                            <a style="padding:1%" href="deleteOp.php?numeroOp=<?= $datos->numeroOp ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash">Delete</i></a>
                        </td>
                    </tr>

                 <?php }   
                 ?>

        </tbody></table>
    </tbody>
     </table>
   </div>
</div>
<div class="embed-container">
<iframe style="
          position: fixed;
  top: 50%; right: 13%;
  transform: translate(50%,-50%);
  border: 2px solid gray;
  border-radius: 5px;

        " src="RegistrarSupus.php"
         height="60%" width="25%" name="demo"></iframe>

        
        
</div>
</body>
</html>