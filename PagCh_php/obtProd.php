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
}
$id_prod = $_GET['id_prod'];
if(isset($_SESSION['nombreusuario'])){
$nombreUsuario=$_SESSION['nombreusuario'];
$sql=$conexion->query("select numeroOp from supu where operadorN='$nombreUsuario' ");
while($dusuario=$sql->fetch_object()){
    $idUs = $dusuario->numeroOp;
};


$sql1=$conexion->query("select * from products where id_prod='$id_prod' ");
while($datos=$sql1->fetch_object()){
  $id_prod= $datos->id_prod;
    $nombrep= $datos->nombrep;
    $precio=$datos->precio;
    $imageP=$datos->imageP;
  

};
$query = "insert into carritoUs (idUs,id_prod, nombrep, precio, imageP) values('$idUs','$id_prod','$nombrep','$precio','$imageP')";

        $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        $result = $mysql -> query($query);

            if($result === TRUE){
                echo'<script type="text/javascript">
            
            window.history.go(-1);        </script>';
                  //  echo "El Super usuario fue creado correctamente";
                }else{
                  //  echo "Error";
                  echo'<script type="text/javascript">
            alert("Error al agregar, consultar stock");
            window.history.go(-1);        </script>';
                }
              }
        $mysql -> close();
    
?>