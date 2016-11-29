$(document).ready(function(){

 
    $("#titulo").focusout(function(){
	 if ($("#titulo").val() === "Matrix" || $("#titulo").val() === "Psicosis") {
        	alert("Matrix");
         } else {
     		alert("Pelicula invalida");
    }
               
    });
});

