<?php

require_once __DIR__ . '/credenciales.php';



$operadorN = $_GET['operadorN'];
   
$contra = $_GET['contra'];
//$tipo = $_GET['tipoOp_Sup'];

//$usu_usuario="brayanbgmbg@gmail.com";
//$usu_password="verde12345";
$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

$sentencia=$conexion->prepare("SELECT * FROM supu WHERE operadorN=? AND contra=?");
$sentencia->bind_param('ss',$operadorN,$contra);

//$sentencia2=$conexion->prepare("SELECT * FROM SupU WHERE operadorN=? AND tipoOp_Sup='sup'");
$sentencia2 = $conexion ->
 query("SELECT * FROM supu WHERE operadorN='$operadorN'AND tipoOp_Sup='sup';");
//$sentencia2->bind_param('ss',$operadorN, $tipo);
  
  //$correo="ola";                         
  //$password="ola";
  $sentencia3 = $conexion ->
  query("SELECT * FROM supu WHERE operadorN='$operadorN'AND tipoOp_Sup='usc';");
$sentencia->execute();


  $resultado = $sentencia->get_result();
 // $resultado2 = $sentencia2->get_result();

  if ($fila = $resultado->fetch_assoc()) {


    
   
    if( $fila = $sentencia2->fetch_assoc()){
      session_start();
if(isset($_SESSION['nombreusuario'])){
  header('location:RegistrarSupus.php');
}
      $_SESSION['nombreusuario'] = $operadorN;
      echo'<script type="text/javascript">
      alert("Has entrado como Super Usuario correctamente");
      window.history.go(-1);        </script>';
      header ("Location:tablaHtmOper.php");
    }else if( $fila = $sentencia3->fetch_assoc()){

      session_start();
      if(isset($_SESSION['nombreusuario'])){
        header('location:ProductosV.php');
      }

      $_SESSION['nombreusuario'] = $operadorN;
      echo'<script type="text/javascript">
      alert("Has entrado como Usuario correctamente");
            </script>';
      header ("Location:ProductosV.php");
    }else{

      session_start();
      if(isset($_SESSION['nombreusuario'])){
        header('location:tablaHtm.php');
      }
      $_SESSION['nombreusuario'] = $operadorN;
       echo'<script type="text/javascript">
   
     
alert("Has entrado como Operador correctamente");

    </script>';

    }
     
    //  echo "El Super usuario fue creado correctamente";
  }else{
    //  echo "Error";
    echo'<script type="text/javascript">
alert("Usuario o Contraseña Incorrectos");
window.history.go(-1);        </script>';
  }

  $sentencia->close();
  $conexion->close();



?>
