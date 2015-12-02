<option value="0">Selecionar</option>
<?php
        
    include("DataBase\DataBaseMySql.php");

    $conMysql=new DataBaseMySql();
    $conM = $conMysql->conexion();
    $bodegas = $conMysql->getBodega(2564526);
   
    
?>
<?php foreach ($bodegas as $row): ?>
                            
    echo '<option value=<?php echo $row['id_Bodega'];?>><?php echo $row['nombreBodega'];?></option>';
                               
<?php endforeach ?> 

