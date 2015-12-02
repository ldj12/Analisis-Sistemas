

<?php

include("DataBaseMySql.php");


$conMysql=new DataBaseMySql();

$con = $conMysql->conexion();
 

$quimicos = (int)$_REQUEST['quimico'];
$bodegas = (int)$_REQUEST['bodega'];
$fechaEnvios = $_REQUEST['fechaEnvio'];
$cantidadEnviadas = (int)$_REQUEST['cantidadEnviada'];
$tipoDestinos = (int)$_REQUEST['tipoDestino'];
$ubicacionDestinos = (int)$_REQUEST['ubicacionDestino'];

 
$insertar = mysqli_query($con,"call sp_insertar_registro('$quimicos','$bodegas','$fechaEnvios','$cantidadEnviadas','$tipoDestinos','$ubicacionDestinos')");
if (!$insertar){
    echo "Error al guardar";
    

    
}else{
    echo "Guardado con exito";
    $modificar = mysqli_query($con,"call sp_modificarInventario('$quimicos','$bodegas','$cantidadEnviadas')");
}

mysqli_close($con);    




