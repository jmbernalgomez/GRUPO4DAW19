<?php
include("../seguridad/conexion.inc.php");
$con=new mysqli($mysql_server,$mysql_login,$mysql_pass,$mysql_db);

if ($con->connect_error) {
    die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
}
else{

    if ($con->query("USE alimentos42019") === TRUE) {
    printf("Usando la base de datos alimentos.\n");
    }
    include("../seguridad/sentencias.sql.php");
     if ($con->multi_query($sentenciasql) === TRUE) {
    printf("Script de creación de tablas en la base de datos alimentos.\n");
    }
   

  $con->close();
}
?>

