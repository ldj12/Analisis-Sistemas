<?php
/**
 * Description of insertarQuimicos
 *
 * @author Pao
 */
include '../../../AplicacionFreDoug/Data/Conexion.php';
include 'menuVista.php';
$con = getConexion();
$idQ = $_GET['idQ'];
$sqlNombre = "select nombreQuimico from tbQuimicos where id_quimico= '$idQ';";
$resultNombre = mysqli_query($con, $sqlNombre);
$sqlGrado1 = "select gradoToxico from tbQuimicos where id_quimico= '$idQ';";
$resultGrado1 = mysqli_query($con, $sqlGrado1);
$sqlGrado2 = "select gradoToxico from tbQuimicos where id_quimico= '$idQ';";
$resultGrado2 = mysqli_query($con, $sqlGrado2);
$sqlGrado3 = "select gradoToxico from tbQuimicos where id_quimico= '$idQ';";
$resultGrado3 = mysqli_query($con, $sqlGrado3);
?>


<link rel="stylesheet" href="../../css/bootstrap.min.css">
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/stylee.css" />
<script type="text/javascript" src="../../js/funciones.js"></script>


<section id="sec_principal">
    <form name="formQuimico" method="GET" action="../../Data/DataQuimicos/modificarQuimicos.php">
        <center>
            <table width="500px" CELLSPACING="30" >
                <tr>
                    <td>Nombre: *</td> 
                    <td><input type="text" ng-model="nombreQ" name="nombreQ"  id="nombreQ"    
                        <?php
                        if (mysqli_num_rows($resultNombre) > 0) {
                            while ($row = mysqli_fetch_assoc($resultNombre)) {
                                $sqlNombreQ = $row["nombreQuimico"];
                                echo 'value="' . $sqlNombreQ . '"';
                            }
                        }
                        ?> required></td>

                </tr>            
                <tr><br/>
                <td><input type="hidden" name="idQ" id="idQ"
                    <?php
                    echo 'value="'.$idQ.'"';
                    ?>
                           ></td>
                <br/></tr>
                <tr>
                    <td>Grado Toxico: *</td> 
                    <td><input type="radio"  ng-model="gradoToxicoQ" name="gradoToxicoQ"  id="gradoToxicoQ" value="Alto" 
                        <?php
                        if (mysqli_num_rows($resultGrado1) > 0) {
                            while ($row = mysqli_fetch_assoc($resultGrado1)) {
                                $gradoTox1 = $row["gradoToxico"];

                                if ($gradoTox1 == "Alto") {
                                    echo 'checked="true"';
                                }
                            }
                        }
                        ?> > Alto
                        <input type="radio"  ng-model="gradoToxicoQ" name="gradoToxicoQ"  id="gradoToxicoQ" value="Medio"
                        <?php
                        if (mysqli_num_rows($resultGrado2) > 0) {
                            while ($row = mysqli_fetch_assoc($resultGrado2)) {
                                $gradoTox2 = $row["gradoToxico"];

                                if ($gradoTox2 == "Medio") {
                                    echo 'checked="true"';
                                }
                            }
                        }
                        ?> > Medio
                        <input type="radio"  ng-model="gradoToxicoQ" name="gradoToxicoQ"  id="gradoToxicoQ" value="Bajo"
                        <?php
                        if (mysqli_num_rows($resultGrado3) > 0) {
                            while ($row = mysqli_fetch_assoc($resultGrado3)) {
                                $gradoTox3 = $row["gradoToxico"];

                                if ($gradoTox3 == "Bajo") {
                                    echo 'checked="true"';
                                }
                            }
                        }
                        ?> > Bajo</td>
                </tr>
                <tr><br/><br/></tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Modificar" id="btnRegistrar">
                    </td>
                </tr>            
            </table>   
        </center>
    </form>       
</section>
</body>
</html>