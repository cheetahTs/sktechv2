<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';
$id_prod = $_GET['id_prod'];
$nombrep = $_GET['nombrep'];
$imageP = $_GET['imageP'];
 $descrP = $_GET['descrP'];
$cant= $_GET['cant'];

 //UPDATE departamento
// set nombre = 'Artes'
// where Director = 'Angel Villena';



        $query = "UPDATE products set nombrep = '$nombrep',imageP= '$imageP', descrP = '$descrP', cant= '$cant' where id_prod = $id_prod;";
        //echo $query;

        $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        $result = $mysql -> query($query);

            if($result === TRUE){
                echo
                '<script type="text/javascript">
            alert("El producto se ha editado correctamente");
            window.history.go(-1);        </script>';
                  //  echo "El Super usuario fue creado correctamente";
                }else{
                  //  echo "Error";
                  echo'<script type="text/javascript">
            alert("Error al editar el producto");
            window.history.go(-1);        </script>';
                }

        $mysql -> close();
    
?>


<tr>

