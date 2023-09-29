<?php
 require_once __DIR__ . '/credenciales.php';

 session_start();
 $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);



     
 if(isset($_SESSION['nombreusuario'])){

   $nombreUsuario=$_SESSION['nombreusuario'];
  
   $sentencia2 = $conexion ->
 query("SELECT * FROM supu WHERE operadorN='$nombreUsuario'AND (tipoOp_Sup='op' OR tipoOp_Sup='sup');");
 if( $fila = $sentencia2->fetch_assoc()){
  echo "<h1 style='font-size: 150%;'>Bienvenido: $nombreUsuario</h1>";

 }else {
  $nombreUsuario=$_SESSION['nombreusuario'];
  $sql=$conexion->query("select numeroOp from supu where operadorN='$nombreUsuario' ");
  while($dusuario=$sql->fetch_object()){
      $idUs = $dusuario->numeroOp;
  };
  $sentencia3 = $conexion ->  query("SELECT * FROM pedido WHERE idUs='$idUs';");
  if( $fila = $sentencia3->fetch_assoc()){
    echo "<h1 style='font-size: 150%;'>Bienvenido Usuario: $nombreUsuario</h1>";
   
 }else{
  echo'<script type="text/javascript">
  alert("Primero Finaliza el Pedido para acceder");
  window.history.go(-1);        </script>';
  header('location:iniciarSesion copy.html');
 }
 }}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <link rel="stylesheet" type="text/css" href="table.css" >
    <link rel="shortcut icon" href="iconketc1.png" >

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">Iniciar Sesion</a>
   
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="https://www.happyland.com.mx/">About the Inspiration</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="tablaHtmOper.php">Administrar Operadores</a>
      </li>
   
      
  
    </ul>  
  </div> <img src="iconketc1.png" style="
    width: 5%;
      height: 5%;
      object-fit: cover;
    
      top: 0%; right: 50%; left: 0%;
                transform: translate(-1000%,0%);
               
                border-radius: 10px;
    ">
</nav>
<body>
 <div class="row" style="
padding-left: 1%;
 padding-top: 1%; 
  width: 60%;
 
  border: 2px solid gray;
  border-radius: 5px;

        ">

    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table role="table" class="table table-striped">  
       <thead role="rowgroup" class="thead-dark">
       <tr role="row">
         <th role="columnheader" style="width:10%;">ID</th>
         <th role="columnheader">Nombre Menor</th>
         <th role="columnheader">Nombre Tutor</th>
         <th role="columnheader">Tiempo</th>
         <th role="columnheader">Telefono</th>
         <th role="columnheader">OCR</th>
         <th role="columnheader">Fecha y Hora</th>
         
         <th role="columnheader" style="width:15%;">U-D</th>
                 <?php
 $nombreUsuario=$_SESSION['nombreusuario'];
 $sql=$conexion->query("select numeroOp from supu where operadorN='$nombreUsuario' ");
 while($dusuario=$sql->fetch_object()){
     $idUs = $dusuario->numeroOp;
 };
                 include "conexion.php";
                 $sql1=$conexion->query("select * from recnin WHERE idUs='$idUs' AND (select date(hreEnt))=(select date(current_timestamp())) ORDER BY idN DESC;");
                 while($datos=$sql1->fetch_object()){ ?>
                   </tr></thead>
<tbody role="rowgroup">
                        <tr role="row">
                        <td role="cell"><?= $datos->idN ?></td>
                        <td role="cell"><?= $datos->nombreM ?></td>
                        <td role="cell"><?= $datos->nombreT ?></td>
                        <td role="cell"><?= $datos->tiempo ?></td>
                        <td role="cell"><?= $datos->telef ?></td>
                        <td role="cell"><?= $datos->ineOp ?></td>
                        <td role="cell"><?= $datos->hreEnt ?></td>

                       
                        
                        <td role="cell">
                            <a style="padding:1%" href="UpdateNin.php?idN=<?= $datos->idN ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"> Edit</i></a>
                            <a style="padding:1%" href="deleteNin.php?idN=<?= $datos->idN ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash">Delete</i></a>
                        </td>
                    </tr>

                 <?php }   
                 ?>

    </tbody>
     </table>
   </div>
</div>
<div class="embed-container">
<iframe style="
         position: fixed;
  top: 37%; right: 0%;
  transform: translate(180%,-35%);
  border: 2px solid gray;
  border-radius: 5px;
  width: 35%;
height:65%;
        " src="RegistrarNinF.html"
         name="demo"></iframe>

        
        
</div>
</body>
</html>