<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bienvenido</title>
</head>


<body>


    <div>
        <h2>Elimiar Menor</h2>
        <?php
  include "PagCh_php/conexion.php";

  $idN=$_GET["idN"]; ?>
  
        <form method="get" action="PagCh_php\deleteNin.php">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Id</span>
                </div>
                <input type="text" class="form-control" name="idN" placeholder="Id" aria-label="Nombre" aria-describedby="basic-addon1" />
            </div>

            <button style="position: absolute; top: 80%; right: 50%; transform: translate(50%,-50%); " class="btn-success " type="submit " value="Actualiar ">Eliminar</button> </form>

    </div>
    <!-- Código de instalación Cliengo para brayanbgmbg@gmail.com 
    <script type="text/javascript ">
        (function() {
            var ldk = document.createElement('script');
            ldk.type = 'text/javascript';
            ldk.async = true;
            ldk.src = 'https://s.cliengo.com/weboptimizer/633f0ed797af91002a65c1c7/633f0edb97af91002a65c1cb.js?platform=dashboard';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ldk, s);
        })();
    </script>-->


</body>

</html>