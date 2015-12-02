<?php
include('../../Data/Conexion.php');
include 'menuVista.php';

$con = getConexion();

$sql = "SELECT * FROM tbQuimicos";
$result = mysqli_query($con, $sql);
?>

<link rel="stylesheet" href="../../css/bootstrap.min.css">
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/stylee.css" />
<link rel="stylesheet" type="text/css" media="all" href="../../css/sexyalertbox.css"/>
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../js/sexyalertbox.v1.2.jquery.js"></script>
<script type="text/javascript" src="../../js/sexyalertbox.v1.2.jquery.mini.js"></script>
<script type="text/javascript" src="../../js/funciones.js"></script>


<script>
    function redireccionar(idQ) {
        window.location = "../../Data/DataQuimicos/eliminarQuimicos.php?idQ=" + idQ;
    }
    function test(idQ) {
        Sexy.confirm('<h1>Eliminar Químico</h1><p>¿Deseas eliminar este químico?</p><p>Pulsa "Ok" para eliminar, o pulsa "Cancelar" para salir.</p>', {onComplete:
                    function (returnvalue) {
                        if (returnvalue)
                        {
                            Sexy.info('<h1>Eliminando químico...</h1>');
                            setTimeout("redireccionar(" + idQ + ")", 2000); //tiempo expresado en milisegundos
                        }
                        else
                        {
                            window.location = "http://localhost:5000/AplicacionFreDoug/Vista/Quimicos/eliminarQuimicos.php";
                        }
                    }
        });
    }
</script>

<section id="sec_principal">
    <table id="table_uno" border = 0>
        <tr>
            <td id="td1">Nombre</td>
            <td id="td1">Grado Tóxico</td>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $idQ = $row["id_quimico"];
                echo '<tr>';
                echo "<td>" . $row["nombreQuimico"] . "</td>"
                . "<td>" . $row["gradoToxico"] . "</td>"
                . "<td><a href='#' onclick='test($idQ)'> " . "Eliminar" . "</a ></td>";
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
