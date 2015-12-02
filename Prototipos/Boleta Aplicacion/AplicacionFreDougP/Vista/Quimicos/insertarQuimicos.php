<?php include 'menuVista.php'; ?>

<link rel="stylesheet" href="../../css/bootstrap.min.css">
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/stylee.css" />
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<link rel="stylesheet" href="global.css" type="text/css" media="all" />
<script type="text/javascript" src="../../js/funciones.js"></script>

<section id="sec_principal">
    <form name="formQuimico" method="POST" action="../../../AplicacionFreDoug/Data/DataQuimicos/insertarQuimicos.php">
        <center>
            <br/><br/><br/>
            <table width="500px" CELLSPACING="30" >
                <tr>
                    <td>Nombre: *</td> 
                    <td><input type="text" ng-model="nombreQ" name="nombreQ"  id="nombreQ" required></td>   
                </tr> 
                <td><br/><br/></td>
                <tr>
                    <td>Grado Toxico: *</td> 
                    <td><input type="radio"  ng-model="gradoToxicoQ" name="gradoToxicoQ"  id="gradoToxicoQ" value="Alto"> Alto
                        <input type="radio"  ng-model="gradoToxicoQ" name="gradoToxicoQ"  id="gradoToxicoQ" value="Medio"> Medio
                        <input type="radio"  ng-model="gradoToxicoQ" name="gradoToxicoQ"  id="gradoToxicoQ" value="Bajo"> Bajo</td>

                </tr>
                <td><br/><br/></td>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Registrar" id="btnRegistrar">
                    </td>
                </tr>            
            </table>
        </center>
    </form>
</section>
</body>
</html>