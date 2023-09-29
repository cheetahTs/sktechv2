<?php
$tipoUs= "usc";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bienvenido nuevo Cliente</title>
</head>


<body>

        <h2>Registrar Nuevo Cliente</h2>

        <form method="get" action="registroSup.php" style="
        padding-left: 30%; padding-right: 30%; padding-top: 15%;
        ">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                <input type="text" class="form-control" name="operadorN" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" />
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="contra" placeholder="Contraseña" aria-label="Nombre" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Contraseña</span>
                </div>
                <input value="usc" type="hidden" class="form-control" name="tipoOp_Sup" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" />

                    <button style="position: absolute; top: 190%; right: 50%; transform: translate(50%,-50%); width:50%;" 
                    class="btn btn-success" type="submit " value="Registrar ">Registrar</button> </form>

             </form>

           
        </div>
      
        </div>
    
</body>

</html>