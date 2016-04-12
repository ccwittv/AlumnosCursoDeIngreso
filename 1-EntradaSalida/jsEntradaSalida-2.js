/*Debemos lograr tomar un nombre con 'prompt' 
y luego mostrarlo por 'alert' al presionar el botón  'MOSTRAR'*/
function Mostrar()
{
	 
	var datoMostrar = prompt("Ingrese cualquier cosa", "Semper fidelis");
    
    if (datoMostrar != null) 
    	{
	        /*document.getElementById("demo").innerHTML =
	        "Hello " + person + "! How are you today?";*/
	        alert(datoMostrar);
    	}
}

