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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cambiar Datos</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="iniciarSesion%20copy.html">Iniciar Sesion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     
     
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

<?php



?>
    <div>
        <h2>Editar datos de Colaborador</h2>
        <?php

include "PagCh_php/conexion.php";
$numeroOp=$_GET["numeroOp"];

$sql=$conexion->query("select * from supU where numeroOp=$numeroOp");
while($datos=$sql->fetch_object()){ ?>

       
        <form method="get" action="PagCh_php\updateOp.php">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Id</span>
                </div>
                <input value ="<?= $datos->numeroOp ?>" type="text" class="form-control" name="numeroOp" placeholder="Id" aria-label="Nombre" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre Colaborador</span>
                </div>
                <input value ="<?= $datos->operadorN ?>" type="text" class="form-control" name="operadorN" placeholder="Nombre Menor" aria-label="Nombre" aria-describedby="basic-addon1" />
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Contraseña establecida</span>
                </div>
                <input value ="<?= $datos->contra ?>"  type="text" class="form-control" name="contra" placeholder="Nombre Tutor" aria-label="Nombre" aria-describedby="basic-addon1" />
            </div>

            <div class="input-group mb-3">
                <select  value ="<?= $datos->tipoOp_Sup ?>"  name="tipoOp_Sup">
                <option value="sup" >Super Usuario</option>
                            <option value="op" >Operador</option>
                  </select>
                <div class="input-group-append ">
                    <span class="input-group-text " id="basic-addon2 ">Tipo</span>
                </div>
            </div>

            <button style="position: absolute; top: 80%; right: 50%; transform: translate(50%,-50%); width:50%;" class="btn btn-success" type="submit " value="Actualiar ">Actualiar</button> </form>

<?php
}
?>
    </div>
    <!-- Código de instalación Cliengo para brayanbgmbg@gmail.com 
    <script type="text/javascript ">
        (function() {
            var ldk = document.createElement('script');
            ldk.type = 'text/javascript';
            ldk.async = true;
            ldk.src = 'https://s.cliengo.com/weboptimizer/633f0ed797af91002a65c1c7/633f0edb97af91002a65c1cb.js?platform=dashboard';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ldk, s);
        })();
    </script>-->


</body>

</html>