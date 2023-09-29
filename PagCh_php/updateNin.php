<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';

$idN = $_GET['idN'];
     $nombreM = $_GET['nombreM'];
     $nombreT = $_GET['nombreT'];
      $ineOp = $_GET['ineOp'];
 $telef= $_GET['telef'];
 $tiempo= $_GET['tiempo'];

 //UPDATE departamento
// set nombre = 'Artes'
// where Director = 'Angel Villena';



        $query = "UPDATE recNin set nombreM = '$nombreM',nombreT= '$nombreT', ineOp = '$ineOp', telef= '$telef', tiempo= '$tiempo' where idN = $idN;";
        //echo $query;

        $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        $result = $mysql -> query($query);

            if($result === TRUE){
                echo
                '<script type="text/javascript">
            alert("Se ha editado correctamente");
            window.history.go(-1);        </script>';
                  //  echo "El Super usuario fue creado correctamente";
                }else{
                  //  echo "Error";
                  echo'<script type="text/javascript">
            alert("Error al editar");
            window.history.go(-1);        </script>';
                }

        $mysql -> close();
    
?>


<tr>

