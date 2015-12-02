<?php
/**
 * @author Pao
 */
include '../Conexion.php';
$con = getConexion();
$idQ = $_GET['idQ'];

mysqli_query($con,"delete from tbQuimicos where id_quimico = $idQ;");
alerta();


desconectar($con);

function alerta() {
    
    header('Location: http://localhost:5000/AplicacionFreDoug/Vista/Quimicos/Quimico.php');
    
}


?>