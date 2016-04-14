function GuardarUsuario()
{
        var nombre = $("#nombre").val()
		var apellido=$("#apellido").val();
		var email=$("#email").val();
        var pass=$("#pass").val();
        var pass2=$("#pass2").val();
        var rol=$("#rol").val();

        var fecha = new Date();
		var fechaingreso= fecha.getFullYear() + "-" + (fecha.getMonth() +1) + "-" + fecha.getDate();  
        	
		var funcionAjax=$.ajax({
		url:"../nexo.php",
		type:"post",
		data:{
				queHacer:"GuardarUsuario",				
				nombre:nombre,
				apellido:apellido,
	            email:email,
	            fechaingreso:fechaingreso,
	            rol:rol,
	            pass:pass,	            
	            pass2:pass2,	            
			 }
	});
	funcionAjax.done(function(retorno){			
		//alert(retorno);
		if (retorno.search("UserExiste") != -1)
			{
	          //alert("La confirmacion no coincide con la contraseña");
	          $("#MensajeError").val("Usuario existe");
			}
		else if (retorno.search("PassNoCoincide") != -1)
			{
	          //alert("La confirmacion no coincide con la contraseña");
	          $("#MensajeError").val("Confirmación no coincide con clave");
			}
		else
		    {
              //alert("Vendedor / usuario creado");
              //MostrarLogin("MostrarLogin");
              $("#MensajeError").val("Usuario creado");
              location.href = '../index.php'
            }  	
		/*switch (retorno.trim())
		 {
		 	case "UserExiste":
		 	 $("#MensajeError").val("Usuario existe");
		 	 break;
		 	case  "PassNoCoincide":
		 	 $("#MensajeError").val("Confirmación no coincide con clave");
		 	 break;
		 	default:
		 	 $("#MensajeError").val("Vendedor / usuario creado");
             location.href = '../index.php'
		 	 break; 
		 }*/
		/*if (retorno.trim() == "PassNoCoincide")
			{
	          //alert("La confirmacion no coincide con la contraseña");
	          $("#MensajeError").val("Confirmación no coincide con clave");
			}
		else
		    {
              //alert("Vendedor / usuario creado");
              //MostrarLogin("MostrarLogin");
              $("#MensajeError").val("Vendedor / usuario creado");
              location.href = '../index.php'							
		    }	*/
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);		
	});	
	funcionAjax.always(function(retorno){	
		//alert(retorno);		
	});	
}