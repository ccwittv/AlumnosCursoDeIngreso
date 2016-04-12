/* 
	Debemos lograr tomar un dato por 'PROMPT' 
	y lo muestro por 'getElementById' al presionar el botón 'MOSTRAR'
*/
function Mostrar()
{
	var datoMostrar = prompt("Ingrese cualquier cosa", "Semper fidelis");
    
    if (datoMostrar != null) 
    	{
	        document.getElementById("elNombre").value = datoMostrar;
    	}
}

