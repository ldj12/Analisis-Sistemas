/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on("ready",function(){

	//evento del boton
	$("#mBodega").on("click", function(){

		//se le cambia el src al iframe
		$("#cuadro").attr("src", "AplicacionFreDoug/Bodega.php");
	});
        
        
        $("#nQuimicos").on("click", function(){
           $("#cuadro").attr("src","info.php"); 
        });
        


});
