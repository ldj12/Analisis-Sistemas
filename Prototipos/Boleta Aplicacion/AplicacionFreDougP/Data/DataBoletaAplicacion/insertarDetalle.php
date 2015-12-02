<?php
/**
 * @author Pao
 */
include '../Conexion.php';
$con = getConexion();
$nombreQ = $_POST['nombreQ'];
$gradoToxicoQ = $_POST['gradoToxicoQ'];


mysqli_query($con,"insert into tbQuimicos (nombreQuimico , gradoToxico) values ('$nombreQ','$gradoToxicoQ');");
alerta();


desconectar($con);

function alerta() {
    
    header('Location: http://127.0.0.1:5000/AplicacionFreDoug/menu.php');
    
}


?>