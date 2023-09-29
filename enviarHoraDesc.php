<?php



// traer información de las variables para la conexión
require_once __DIR__ . '/credenciales.php';

    
     $chipid = $_GET['chipId'];

        $query = "insert into recNin (chipId) values('$chipid')";
        //echo $query;

        $mysql = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        $result = $mysql -> query($query);

            if($result === TRUE){
                echo'ok';
                  //  echo "El Super usuario fue creado correctamente";
                }else{
                  //  echo "Error";
                  echo'no ok';
                }

        $mysql -> close();
    
?>