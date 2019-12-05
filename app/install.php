<?php
include("../seguridad/conexion.inc.php");
$con=new mysqli($mysql_server,$mysql_login,$mysql_pass);

if ($con->connect_error) {
    die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
}
else{

    if ($con->query("CREATE DATABASE alimentos") === TRUE) {
    printf("Se creó con éxtio la base de datos alimentos.\n");
    }
    if ($con->query("USE alimentos") === TRUE) {
    printf("Usando la base de datos alimentos.\n");
    }
    include("../seguridad/sentencias.sql.php");
     if ($con->multi_query($sentenciasql) === TRUE) {
    printf("Script de creación de tablas en la base de datos alimentos.\n");
    }
   

  $con->close();
}
?>

