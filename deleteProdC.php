<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';

$idcarr = $_GET['idcarr'];
 

 //UPDATE departamento
// set nombre = 'Artes'
// where Director = 'Angel Villena';
 
        $query = "DELETE FROM carritoUs  where idcarr = $idcarr;";
        //echo $query;

        $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        $result = $mysql -> query($query);

            if($result === TRUE){
                echo
                '<script type="text/javascript">
            alert("Se ha BORRADO correctamente");
            window.history.go(-1);        </script>';
           
                  //  echo "El Super usuario fue creado correctamente";
                }else{
                  //  echo "Error";
                  echo'<script type="text/javascript">
            alert("Error al borrar");
            window.history.go(-1);
                    </script>';
                   
                }

        $mysql -> close();
    
?>


<tr>

