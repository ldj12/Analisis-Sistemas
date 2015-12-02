<option value="0">Selecionar</option>
<?php
        
    include("DataBase\DataBaseMySql.php");

    $conMysql=new DataBaseMySql();
    $conM = $conMysql->conexion();
    $empresas = $conMysql->getEmpresas();
   
    
?>
<?php foreach ($empresas as $row): ?>
                            
    echo '<option value=<?php echo $row['cedulaJudirica'];?>><?php echo $row['nombre'];?></option>';
                               
<?php endforeach ?> 

