<?php
/**
 * Description of Conexion
 *
 * @author Pao
 */

function getConexion() {
    
$servername ="localhost";
$username= "root";
$password= "";
$database = "Fredoug";

return $conn = new mysqli($servername, $username, $password,$database);
    
}

function desconectar($con) {
    
    mysqli_close($con);
    
}


?>