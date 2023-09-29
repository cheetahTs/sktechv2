<?php
 require_once __DIR__ . '/credenciales.php';

 session_start();
 $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

     
 if(isset($_SESSION['nombreusuario'])){

   $nombreUsuario=$_SESSION['nombreusuario'];
      
   $sentencia2 = $conexion ->
 query("SELECT * FROM SupU WHERE operadorN='$nombreUsuario'AND (tipoOp_Sup='usc' OR tipoOp_Sup='sup');");
 if( $fila = $sentencia2->fetch_assoc()){
  echo "<h1 style='font-size: 150%;'>Bienvenido: $nombreUsuario</h1>";

 }else{
   header('location:iniciarSesion copy.html');
 }
 }else{
  header('location:iniciarSesion copy.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="cssN/basta.css" />

    <title>Productos</title>
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
      <li class="nav-item"id="admdeUs">
        <a class="nav-link" href="http://localhost/paginachota2/PagCh_php/tablaHtm.php">Visualizar como</a>
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
<div class="lateral">
<iframe style="
    position: fixed;
  top: 50%; right: 16%;
  transform: translate(50%,-44%);
  border: 2px solid gray;
  border-radius: 5px;

        " src="carrito.php"
         height="80%" width="25%" name="demo"></iframe>
         </div> 


         <div class="principal">
<div class="row" style="
        width:70%;
        ">
<?php
			require_once __DIR__ . '/credenciales.php';
            $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
			$sql = $conexion->query("SELECT  id_prod,nombrep, descrP, imageP,precio FROM products");
		//	$resultset = mysqli_query($conexion, $sql) or die("database error:". mysqli_error($conexion));			
			while( $datos=$sql->fetch_object() ) {
			?>
      <div class="col-sm-6" style="
  
  justify-content: center;
  
  ">
            <div class="card">
  <img class="card-img-top" src="<?= $datos->imageP ?>" alt="Card image cap">
  <div class="card-body">
    <h5 style="align:;" class="card-title"><?= $datos->nombrep ?></h5>
    <p class="card-text"><?= $datos->descrP ?></p>
     <p class="card-text">MXN $<?= $datos->precio ?></p>
     
    <a  href="http://localhost/paginachota2/PagCh_php/obtProd.php?id_prod=<?= $datos->id_prod ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square">Agregar al Carrito</i></a>
                          </div>
</div>
</div>      
      
			<?php } ?>

      </div> </div> 
      </body>