<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';

$numeroOp = $_GET['numeroOp'];
     $operadorN = $_GET['operadorN'];
     $contra = $_GET['contra'];
      $tipoOp_Sup = $_GET['tipoOp_Sup'];


 //UPDATE departamento
// set nombre = 'Artes'
// where Director = 'Angel Villena';



        $query = "UPDATE supU set numeroOp = '$numeroOp',operadorN= '$operadorN', contra = '$contra', tipoOp_Sup= '$tipoOp_Sup' where numeroOp = $numeroOp;";
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

