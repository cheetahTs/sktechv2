<?php
include ("credenciales.php");

$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

$db= $conexion;
$tableName="recNin";
//(nombreM, nombreT, tiempo, telef, ineOp)
$columns= ['idN', 'nombreM','nombreT','tiempo','telef','ineOp', 'hreEnt'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Error de conexión a la BD";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="El Nombre de las columnas deben estar  definidas en un indice de arreglo";
 }elseif(empty($tableName)){
   $msg= "Nombre de la tabla vacio";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY idN DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>