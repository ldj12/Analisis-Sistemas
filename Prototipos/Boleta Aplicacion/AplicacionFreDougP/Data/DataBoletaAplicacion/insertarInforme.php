<?php

/**
 * @author Pao
 */
include '../Conexion.php';
$con = getConexion();
$id_Finca = $_GET['id_Finca'];
$cantidadAplicada = $_GET['cantidadAplicada'];
$hectareasAplicadas = $_GET['hectareasAplicadas'];
$id_Supervisor = $_GET['id_Supervisor'];
$tipo_Informe = $_GET['tipo_Informe'];
$detalle = $_GET['detalle'];
$porcentaje_Avance = $_GET['porcentaje_Avance'];


$consulta1 = "insert into tbDetalle_Informe (id_Empresa, cantidadAplicada, hectareasAplicadas, porcentaje_Avance) values('$id_Finca', '$cantidadAplicada', '$hectareasAplicadas', '$porcentaje_Avance');";
mysqli_query($con, $consulta1);

$consultaId = "select id_Finca from tbDetalle_Informe where id_Empresa= '$id_Finca' and cantidadAplicada= '$cantidadAplicada' and hectareasAplicadas='$hectareasAplicadas' and porcentaje_Avance='$porcentaje_Avance';";
$resultC = mysqli_query($con, $consultaId);

while ($row = mysqli_fetch_assoc($resultC)) {
    $id_Detalle_Informe = $row["id_Finca"];
}
$consulta2 = "insert into tbInforme (id_Supervisor, id_Detalle_Informe, tipo_Informe) values('$id_Supervisor', '$id_Detalle_Informe', '$tipo_Informe');";
mysqli_query($con, $consulta2);

alerta();


desconectar($con);

function alerta() {

    header('Location: http://localhost:5000/AplicacionFreDoug/Vista/BoletaAplicacion/BoletaAplicacion.php');
}

?>