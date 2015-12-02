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
    
    header('Location: http://localhost:5000/AplicacionFreDoug/Vista/Quimicos/Quimico.php');
    
}


?>
