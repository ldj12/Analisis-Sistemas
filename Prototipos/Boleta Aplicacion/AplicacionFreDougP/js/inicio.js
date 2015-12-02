
//funcion que se ejecuta al cargar el documento
$(document).on("ready",function(){

	//evento del boton
	$("#nBodega").on("click", function(){

		//se le cambia el src al iframe
		$("#cuadro").attr("src", "info.php");
	});
        
        
        $("#nQuimicos").on("click", function(){
           $("#cuadro").attr("src","Quimico.php"); 
        });
        


});

