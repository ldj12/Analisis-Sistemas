
<?php
        
    include("DataBase\DataBaseMySql.php");
    $idtipo = $_GET['param_idtipo'];
    $idempresa = $_GET['param_idempresa'];
    $conMysql=new DataBaseMySql();
    $conM = $conMysql->conexion();
    if($idtipo==0){
        $ubicacion = $conMysql->getBodegasEmpresas($idempresa);
    }
    if($idtipo==1){
        $ubicacion = $conMysql->getFincasEmpresas($idempresa);
    }
    
   
    
?>
<?php foreach ($ubicacion as $row): ?>
    <?php if($idtipo==0){ ?>
        echo '<option value=<?php echo $row['id_Bodega'];?>><?php echo $row['nombreBodega'];?></option>';
    <?php } ?>
    <?php if($idtipo==1){ ?>
        echo '<option value=<?php echo $row['id_Finca'];?>><?php echo $row['nombre'];?></option>';
    <?php } ?>
    
                               
<?php endforeach ?> 

