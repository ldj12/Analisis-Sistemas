<option value="0">Selecionar</option>
<?php
        
    include("DataBase\DataBaseMySql.php");

    $conMysql=new DataBaseMySql();
    $conM = $conMysql->conexion();
    $quimicos = $conMysql->getQuimicos();
   
    
?>
<?php foreach ($quimicos as $row): ?>
                            
    echo '<option value=<?php echo $row['id_quimico'];?>><?php echo $row['nombreQuimico'];?></option>';
                               
<?php endforeach ?> 

