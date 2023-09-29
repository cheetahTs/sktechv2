<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';
session_start();
$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);


     $nombreM = $_GET['nombreM'];
     $nombreT = $_GET['nombreT'];
      $ineOp = $_GET['ineOp'];
 $telef= $_GET['telef'];
 $tiempo= $_GET['tiempo'];
  //        $nombre = "Bryan12";
  //       $contrasena = "123123";
 //         $correo= "bryan@gmail.com";
 if(isset($_SESSION['nombreusuario'])){
  $nombreUsuario=$_SESSION['nombreusuario'];
  $sql=$conexion->query("select numeroOp from supu where operadorN='$nombreUsuario' ");
  while($dusuario=$sql->fetch_object()){
      $idUs = $dusuario->numeroOp;
  };
}
        $query = "insert into recnin (nombreM,nombreT, ineOp, telef, tiempo, idUs) values('$nombreM','$nombreT','$ineOp','$telef','$tiempo','$idUs')";
        //echo $query;

        $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        $result = $mysql -> query($query);

            if($result === TRUE){
                echo'<script type="text/javascript">
            alert("Se ha listado correctamente");
            window.history.go(-1);        </script>';
                  //  echo "El Super usuario fue creado correctamente";
                }else{
                  //  echo "Error";
                  echo'<script type="text/javascript">
            alert("Error al listar");
            window.history.go(-1);        </script>';
                }

        $mysql -> close();
    
?>