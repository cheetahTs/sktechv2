<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';
$nombrep = $_GET['nombrep'];
$imageP = $_GET['imageP'];
 $descrP = $_GET['descrP'];
$cant= $_GET['cant'];
$precio= $_GET['precio'];
 
  //        $nombre = "Bryan12";
  //       $contrasena = "123123";
 //         $correo= "bryan@gmail.com";

 $query = "insert into products (nombrep,imageP, descrP, cant, precio) values('$nombrep','$imageP','$descrP','$cant','$precio')";
 //echo $query;

 $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

 $result = $mysql -> query($query);

     if($result === TRUE){
         echo'<script type="text/javascript">
     alert("El producto se registró correctamente");
     window.history.go(-1);        </script>';
           //  echo "El Super usuario fue creado correctamente";
         }else{
           //  echo "Error";
           echo'<script type="text/javascript">
     alert("Error al registrar prodcuto");
     window.history.go(-1);        </script>';
         }



        $mysql -> close();
    
?>