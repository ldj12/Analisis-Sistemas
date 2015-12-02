<?php
/**
 * Description of insertarQuimicos
 *
 * @author Pao
 */
include('../../Data/Conexion.php');
include 'menuVista.php';
$con = getConexion();

$sql = "select * from tbQuimicos;";
$result = mysqli_query($con, $sql);
?>

<link rel="stylesheet" href="../../css/bootstrap.min.css">
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../../css/global.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="../../css/stylee.css" />
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../js/funciones.js"></script>


<script>
    function redireccionar(idQ) {
        window.location = "../../Vista/Quimicos/modificarQuimico.php?idQ=" + idQ;
    }
</script>
<section id="sec_principal">
    <table id="table_uno" border = 0>
        <tr>
            <td id="td1">Nombre</td>
            <td id="td1">Grado Toxico</td>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $idQ = $row["id_quimico"];
                echo '<tr>';
                echo "<td>" . $row["nombreQuimico"] . "</td>"
                . "<td>" . $row["gradoToxico"] . "</td>"
                . "<td><a href='#' onclick='redireccionar($idQ)'> " . "Modificar" . "</a ></td>";
                echo '</tr>';
            }
        } else {
            echo "<h1>No hay químicos registrados</h1>";
        }
        desconectar($con);
        ?>


    </table>


</section>


</body>
</html>