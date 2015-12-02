<?php
/**
 * @author Pao
 */
include '../Conexion.php';
$con = getConexion();
$idQ= $_GET['idQ'];
$nombreQ = $_GET['nombreQ'];
$gradoToxicoQ = $_GET['gradoToxicoQ'];

mysqli_query($con,"Update tbQuimicos set nombreQuimico ='$nombreQ' where id_quimico=$idQ;");
mysqli_query($con,"Update tbQuimicos set gradoToxico ='$gradoToxicoQ' where id_quimico=$idQ;");
alerta();


desconectar($con);

function alerta() {
    
    header('Location: http://localhost:5000/AplicacionFreDoug/Vista/Quimicos/Quimico.php');
    
}


?>