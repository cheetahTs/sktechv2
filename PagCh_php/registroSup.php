<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';

     $operadorN = $_GET['operadorN'];
   
      $contra = $_GET['contra'];
      $tipo = $_GET['tipoOp_Sup'];
 
  //        $nombre = "Bryan12";
  //       $contrasena = "123123";
 //         $correo= "bryan@gmail.com";

        $query = ("insert into SupU (operadorN,contra, tipoOp_Sup) values('$operadorN','$contra','$tipo')" ) or die(mysql_error());
        //echo $query;
        $query2 = ("SELECT * FROM SupU WHERE tipoOp_Sup='sup'" );

        $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        $result = $mysql -> query($query);
        $result2 = $mysql -> query($query2);
            if($result === TRUE){

                if($tipo == 'sup'){
                       echo'<script type="text/javascript">
        alert("El Super Usuario fue creado correctamente");
        window.history.go(-1);        </script>';}else if($tipo == 'usc'){
            echo'<script type="text/javascript">
            alert("El Usuario fue creado correctamente");
            window.history.go(-2);        </script>';
            
        }else{
            echo'<script type="text/javascript">
            alert("El Operador fue creado correctamente");
            window.history.go(-2);        </script>';
        }
             
              //  echo "El Super usuario fue creado correctamente";
            }else{
              //  echo "Error";
              echo'<script type="text/javascript">
        alert("Error");
        window.history.go(-1);        </script>';
            }

        $mysql -> close();
    
?>