<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/ingreso.css">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">		
		<!--final de Estilos-->

		<!--Lógica-Programación-->

        <!--Final de Lógica-Programación -->


	</head>
<?php  
  session_start();
  if(!isset($_SESSION['registrado']))
   {  
?>	
	<body>
		<div class="CajaUno animated bounceInDown">
			<h1>Ingrese Su Usuario y Contraseña</h1>
			<form id="FormIngreso" onsubmit="validarLogin();return false;">							
	           <label for="correo" class="sr-only">Usuario (correo electrónico)</label>	                    
	           <input type="email" id="correo" class="form-control" placeholder="Usuario (correo electrónico)" required="" autofocus="" value="<?php  if(isset($_COOKIE["registro"])){echo $_COOKIE["registro"];}?>">
               <br> 
	           <label for="clave" class="sr-only">Clave</label>
               <input type="password" id="clave" minlength="6" class="form-control" placeholder="Clave" required="">
	           <div class="checkbox">
	             <label>
	               <input type="checkbox" id="recordarme" checked> Recordame
	             </label>
	           </div>
	           <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
	           <br>
	           <input type="text"  class="form-control" readonly id="MensajeError" >        								
		       <h3 class="form-ingreso-heading"></h3>
		       <button class="btn btn-lg btn-warning btn-block" onclick="location.href = 'partes/formUsuarioJquery.php'" type="button">Registrarse</button> <br> 
		       <button class="btn btn-lg btn-success btn-block" onClick="location.href = 'resetearclave/index.html'" type="button">Olvidé mi clave</button>
		    </form>
		</div>	    
   </body>
<?php 
   }
  else
   { 
      echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";
      header("Location: index_empleados.php");
   } 
?>
</html>
