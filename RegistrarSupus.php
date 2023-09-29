<?php
 
 require_once __DIR__ . '/credenciales.php';

 session_start();
 $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);



     
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registrar Colaborador</title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">Iniciar Sesion</a>
   
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="https://www.happyland.com.mx/">About the Inspiration</a>
      </li>
      
   
      <li class="nav-item">
        <form action="sessionD.php" method="get">
            <input  class="form-control" name="operadorN" value="<?= $nombreUsuario ?>" aria-label="Nombre" aria-describedby="basic-addon1" type="hidden">
            <input style="position: absolute;
            top: 15%; right: 1%;
            "  class="btn btn-warning" type="submit" value="Cerrar Sesión" name="btncerrar" />
            </form>
      </li>
      
  
    </ul>  
  </div> <img src="iconketc1.png" style="
    width: 5%;
      height: 5%;
      object-fit: cover;
    
      top: 0%; right: 50%; left: 0%;
                transform: translate(-1000%,0%);
               
                border-radius: 10px;
    ">
</nav>
<body>

        <h2>Registrar Nuevo Colaborador</h2>

        <form method="get" action=registroSup.php>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Operador</span>
                </div>
                <input type="text" class="form-control" name="operadorN" placeholder="Operador" aria-label="Nombre" aria-describedby="basic-addon1" />
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="contra" placeholder="Contraseña" aria-label="Nombre" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Contraseña</span>
                </div>
                <div class="input-group mb-3">
                    <select name="tipoOp_Sup">
                            <option value="sup" >Super Usuario</option>
                            <option value="op" >Operador</option>
                          </select>
                    <div class="input-group-append ">
                        <span class="input-group-text " id="basic-addon2 ">Tipo</span>
                    </div>
                    <button style="position: absolute; top: 190%; right: 50%; transform: translate(50%,-50%); width:50%;" 
                    class="btn btn-success" type="submit " value="Registrar ">Registrar</button> </form>

             </form>

           
        </div>
      
        </div>
    
</body>

</html>