<?php 
include 'menuVista.php'; 
?>


<section id="sec_principal">
    <br/><br/>
    <form name="formQuimico" method="GET" action="insertarBoletaAplicacionP.php">
        <center>
            <table width="500px" CELLSPACING="30" >
                <tr>
                    <td>Supervisor: *</td> 
                    <td><input type="text" ng-model="id_Supervisor" name="id_Supervisor"  id="id_Supervisor" required></td>  

                </tr> 
                <tr></tr>
                <tr>
                    <td>Tipo de informe: *</td> 
                    <td><input type="radio"  ng-model="tipo_Informe" name="tipo_Informe"  id="tipo_Informe" value="Semanal"> Semanal
                        <input type="radio"  ng-model="tipo_Informe" name="tipo_Informe"  id="tipo_Informe" value="Mensual"> Mensual</td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Detalle</td>
                    <td><input type="text" ng-model="detalle" name="detalle"  id="detalle" required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Finca:*</td> 
                    <td><input type="text" ng-model="id_Finca" name="id_Finca"  id="id_Finca" required></td>   
                </tr>
                <tr></tr>
                <tr>
                    <td>Cantidad aplicada:*</td> 
                    <td><input type="number" ng-model="cantidadAplicada" name="cantidadAplicada"  id="cantidadAplicada" required></td>   
                </tr>
                <tr></tr>
                <tr>
                    <td>Hectareas aplicadas: *</td> 
                    <td><input type="number" ng-model="hectareasAplicadas" name="hectareasAplicadas"  id="hectareasAplicadas" required></td>   
                </tr>
                <tr>
                    <td>Porcentaje aplicado: *</td> 
                    <td><input type="text" ng-model="porcentaje_Avance" name="porcentaje_Avance"  id="porcentaje_Avance" disabled="true" </td>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Calcular" id="btnRegistrar">
                    </td>
                </tr>
                <tr><td></td></tr>
                         
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