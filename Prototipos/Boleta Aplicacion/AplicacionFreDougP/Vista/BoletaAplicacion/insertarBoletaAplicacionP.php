<?php 
include 'menuVista.php'; 
include('../../Data/Conexion.php');
$con = getConexion();
$id_Finca = $_GET['id_Finca']; 
$cantidadAplicada = $_GET['cantidadAplicada']; 
$hectareasAplicadas = $_GET['hectareasAplicadas']; 
$id_Supervisor = $_GET['id_Supervisor']; 
$tipo_Informe = $_GET['tipo_Informe'];
$detalle = $_GET['detalle'];
$sql = "SELECT extensionFinca FROM tbFinca where id_Empresa= '$id_Finca'";
$result = mysqli_query($con, $sql);
?>

<script>
    function porcentaje($hectareasAplicadas, $extFinca) {
        
        return round (($hectareasAplicadas * 100) / $extFinca);
    }
</script>

<section id="sec_principal">
    <br/><br/>
    <form name="formQuimico" method="POST" action="../../Data/DataQuimicos/insertarQuimicos.php">
        <center>
            <table width="500px" CELLSPACING="30" >
                <tr>
                    <td>Supervisor: *</td> 
                    <td><input type="text" ng-model="id_Supervisor" name="id_Supervisor"  id="id_Supervisor" disabled="true" <?php
                                echo 'value="' . $id_Supervisor . '"';
                        ?> required></td>
                </tr> 
                <tr></tr>
                <tr>
                    <td>Tipo de informe: *</td> 
                    <td><input type="radio"  ng-model="tipo_Informe" name="tipo_Informe"  id="tipo_Informe" value="Semanal" disabled="true" <?php
                        if ($tipo_Informe == "Semanal") {
                                    echo 'checked="true"';
                                }
                            
                        ?> > Semanal
                        <input type="radio"  ng-model="tipo_Informe" name="tipo_Informe"  id="tipo_Informe" value="Mensual" disabled="true"
                        <?php
                        if ($tipo_Informe == "Mensual") {
                                    echo 'checked="true"';
                                }
                        ?> > Mensual</td>
                        
                </tr>
                <tr></tr>
                <tr>
                    <td>Detalle</td>
                    <td><input type="text" ng-model="detalle" name="detalle"  id="detalle" disabled="true" <?php
                                echo 'value="' . $detalle . '"';
                        ?> required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Finca:*</td> 
                    <td><input type="text" ng-model="id_Finca" name="id_Finca"  id="id_Finca" disabled="true" <?php
                                echo 'value="' . $id_Finca . '"';
                        ?> required></td>   
                </tr>
                <tr></tr>
                <tr>
                    <td>Cantidad aplicada:*</td> 
                    <td><input type="number" ng-model="cantidadAplicada" name="cantidadAplicada"  id="cantidadAplicada" disabled="true" <?php
                                echo 'value="' . $cantidadAplicada . '"';
                        ?> required></td>   
                </tr>
                <tr></tr>
                <tr>
                    <td>Hectareas aplicadas: *</td> 
                    <td><input type="number" ng-model="hectareasAplicadas" name="hectareasAplicadas"  id="hectareasAplicas" disabled="true" <?php
                                echo 'value="' . $hectareasAplicadas . '"';
                        ?> required></td>   
                </tr>
                <tr>
                    <td>Porcentaje aplicado: *</td> 
                    <td><input type="number" ng-model="porcentaje_Avance" name="porcentaje_Avance"  id="porcentaje_Avance" disabled="true"<?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $extFinca= $row["extensionFinca"];
                                $porc=  (($hectareasAplicadas * 100) / $extFinca);
                                echo 'value="' . $porc . '"';
                            }
                        }else{
                            echo 'value="0"';
                        }
                        ?> required></td>
                    </td>
                    
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Registrar" id="btnRegistrar">
                    </td>
                </tr>            
            </table>
        </center>
    </form>
</section>
<link rel="stylesheet" type="text/css" href="../../css/stylee.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="global.css" type="text/css" media="all" />
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../js/funciones.js"></script>

<link rel="stylesheet" href="../../css/bootstrap.min.css">
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</body>
</html>