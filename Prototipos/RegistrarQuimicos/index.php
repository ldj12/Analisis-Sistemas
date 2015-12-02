<!DOCTYPE html>
<?php
    
    
    
    include("DataBase\DataBaseMySql.php");

    $conMysql=new DataBaseMySql();
    $conM = $conMysql->conexion();
    //$usuarios = $conMysql->get_usuarios();

    //$provincia = $conMysql->getProvincias();
    
    
    
?>
<html>
    <head>
        <title>Fredoug</title>
        
        <meta charset="utf-8">
        <meta name="description" content="Your description">
        <meta charset="utf8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="css/style_1.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
        <script src="js/login.js"></script>
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/tms-0.4.1.js"></script>
        <script src="js/slider.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript">
            $("document").ready(function(){
                
                $( "#quimico" ).load("Quimico.php");
                $( "#bodega" ).load("Bodega.php");
                $( "#empresa" ).load("Empresa.php");
                
                $( "#tipoDestino" ).change(function(){
                    var idtipo = $("#tipoDestino").val();
                    var idempresa = $("#empresa").val();
                    $.get("UbicacionDestino.php",{param_idtipo:idtipo,param_idempresa:idempresa}).done(function(data){
                         $("#ubicacionDestino").html(data);  
                         
                         
                    })
                })
                $( "#empresa" ).change(function(){
                    var idtipo = $("#tipoDestino").val();
                    var idempresa = $("#empresa").val();
                    $.get("UbicacionDestino.php",{param_idtipo:idtipo,param_idempresa:idempresa}).done(function(data){
                         $("#ubicacionDestino").html(data);  
                         
                         
                    })
                })
                
                
                $('#lol').click(function(event) {
			var codigo = $('#codigo').val();
			// Si en vez de por post lo queremos hacer por get, cambiamos el $.post por $.get
			$.post('DetalleFactura.php', {
				codigo : codigo
			}, function(responseText) {
				$('#tabla').html(responseText);
			});
		});
            })
        </script>
        
	<script type="text/javascript">
	function HoraActual(hora, minuto, segundo){
		segundo = segundo + 1;
		if(segundo == 60) {
			minuto = minuto + 1;
			segundo = 0;
			if(minuto == 60) {
				minuto = 0;
				hora = hora + 1;
				if(hora == 24) {
					hora = 0;
				}
			}
		}
		if(hora < 10) hora = '0' + hora;
		if(minuto < 10) minuto = '0' + minuto;
		if(segundo < 10) segundo = '0' + segundo;
		HoraCompleta= hora + " : " + minuto + " : " + segundo;
		document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
		setTimeout("HoraActual("+hora+", "+minuto+", "+segundo+")", 1000);
	} 
        
	</script> 
        <script type="text/javascript">
 
$(function(){
	// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
	$("#agregar").on('click', function(){
		$("#tabla tbody tr:eq(0)").clone().removeClass('fila-base').appendTo("#tabla tbody");
	});
 
	// Evento que selecciona la fila y la elimina 
	$(document).on("click",".eliminar",function(){
		var parent = $(this).parents().get(0);
		$(parent).remove();
	});
});
 
</script>

    </head>
    <body id="page1" onload="HoraActual(<?php echo -7+date("H").", ".date("i").", ".date("s"); ?>)"  >
        <header>
            <DIV align="left"><h2>Fecha Actual: <?php echo date('d-m-Y') ?></h2></DIV>
            <h2 align="center">Hora Actual<div id="contenedor_reloj"></div></h2>
        </header>
     
    <HR>
        <CENTER><h1>Registro de Distribución de Químicos</h1></center>
    <HR>

        
        <form name="formRegistro" method="GET" action="DataBase/InsertarRegistro.php">
            <table width="500px" CELLSPACING="30" >
                <td>Quimico *</td>
                <td>
                      
                    <select id="quimico" name="quimico">
                            <option value="0">Selecionar</option>
                    </select>
        
                </td>
                <tr>
                <td>Bodega Almacen *</td>
                <td>
                      
                    <select id="bodega" name="bodega">
                            <option value="0">Selecionar</option>
                    </select>
        
                </td>
                </tr> 
                <tr>
                    
                    <td>Fecha Envío *</td> <td><input type='datetime' id="fechaEnvio" name="fechaEnvio"  value="<?php echo date('Y-m-d') ?>" readonly="true" id="fechaEnvio "></input></td>
                    
                </tr>               
                             
                <tr>
                    
                    <td>Cantidad Enviada: *</td> <td><input type="number" name="cantidadEnviada"  id="cantidadEnviada" required></td>
                    
                </tr>
                                            
                <tr>
                    
                    <td>Empresa Destino: *</td> 
                    <td>
                        <select id="empresa" name="empresa">
                            <option value="0">Selecionar</option>
                        </select>
                    </td>
                </tr>
                    
                <tr>
                    
                    <td>Tipo Destino: *</td> 
                    <td>
                        <select id="tipoDestino" name="tipoDestino">
                            <option value="0">Bodega</option>
                            <option value="1">Finca</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    
                    <td>Ubicación Destino: *</td> 
                    <td>
                        <select id="ubicacionDestino" name="ubicacionDestino">
                            <option value="0">Selecionar</option>
                        </select>
                    </td>

                </tr>

                
                <tr>
                    <td colspan="2" style="text-align:right">
                        <input type="submit" value="Registrar">
                    </td>
                </tr>
                
            </table>
            
        </form>
        
    </body>
</html>
