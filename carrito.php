<?php
 require_once __DIR__ . '/credenciales.php';

 session_start();
 $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

     
 if(isset($_SESSION['nombreusuario'])){

   $nombreUsuario=$_SESSION['nombreusuario'];
      
   $sentencia2 = $conexion ->
 query("SELECT * FROM SupU WHERE operadorN='$nombreUsuario'AND (tipoOp_Sup='usc' OR tipoOp_Sup='sup');");
 if( $fila = $sentencia2->fetch_assoc()){
  echo "<h1 style='font-size: 150%;'>Espacio de $nombreUsuario</h1>";

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

    <title>Carrito de <?php echo $nombreUsuario; ?></title>
</head>


<?php
if(isset($_SESSION['nombreusuario'])){
    $nombreUsuario=$_SESSION['nombreusuario'];
    $sql=$conexion->query("select numeroOp from supu where operadorN='$nombreUsuario' ");
    while($dusuario=$sql->fetch_object()){
        $idUs = $dusuario->numeroOp;
    };
}
		require_once __DIR__ . '/credenciales.php';
        $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        $sql = $conexion->query("SELECT  idcarr,id_prod, nombrep, imageP,precio FROM carritous where idUs='$idUs' ");
    //	$resultset = mysqli_query($conexion, $sql) or die("database error:". mysqli_error($conexion));			
        while( $datos=$sql->fetch_object() ) {
        ?>
  <div class="col-sm-6" >
        <div class="">
        <div class="" style="height:20%;">

<img class="card-img-top"  src="<?= $datos->imageP ?>" alt="Card image cap"></div>
<div class="card-body">
<h5 style="
  
  flex-direction: column;
  justify-content: center;
  align-items: center;
 

  " class="card-title"><?= $datos->nombrep ?></h5>

 <p class="card-text">MXN $<?= $datos->precio ?></p>
 
<a  href="http://localhost/paginachota2/PagCh_php/deleteProdC.php?idcarr=<?= $datos->idcarr ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-pen-to-square">Eliminar</i></a>
                      </div>
                     
</div>


			<?php } ?>
            <?php           
         
		require_once __DIR__ . '/credenciales.php';
        $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        $sum = "SELECT  SUM(precio) as total FROM carritous  where idUs='$idUs'";
    //	$resultset = mysqli_query($conexion, $sql) or die("database error:". mysqli_error($conexion));	
    $result = mysqli_query($conexion, $sum);		
        while($a = mysqli_fetch_assoc($result) ) {
            echo "<h1 style='font-size: 250%;'>Total: $".$a['total']."</h1>";
        }?>
        <a style="text-align: center; display: block;" href="http://localhost/paginachota2/PagCh_php/obtPed.php?" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square">Realizar Pedido</i></a>
        <br>
            </div>
            <br>
            <div style="display: flex;
  justify-content: center;
  align-items: center;
  ">
        <form  method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5WFB454RLWFEU">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" href="http://localhost/paginachota2/PagCh_php/obtPed.php?estadoPedido" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form> </div>
