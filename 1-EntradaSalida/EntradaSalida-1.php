<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

			<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="../estilo.css">
		<link rel="stylesheet" type="text/css" href="../animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 		<link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
 		<script type="text/javascript" src="../js/funcionesLogin.js"></script>
		<script type="text/javascript" src="jsEntradaSalida-1.js"></script>
        <!--Final de Lógica-Programación -->
		

	</head>
<?php 
  require_once '../clases/controlDeSesion.php';
  session_start();  
  ControlDeSesion::estaSeteado('registrado', '../index.php');
?>  	
	<body>
		<div class="CajaUno animated bounceInDown">
			<h1>Solo Mostrar mensaje</h1>
			<form id="FormIngreso">
					
					<!-- por ahora vacio-->

			</form>
			<button  class="MiBotonUTN" onclick="Mostrar()" >Mostrar</button>

		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
				<h3>
					Bienvenidos.
					</br>Al presionar el  botón, se debe mostrar un mensaje como el siguiente "Esto funciona de maravilla".
				</h3>
		
		</div>

		<div class="CajaAbajo animated bounceInUp">
				<a  class="MiBotonUTNLinea" onclick="location.href='index.php'" >Men&uacute; ejercicios</a>	
				<br> <br> <br>
				<a  class="MiBotonUTNLinea" onclick="deslogear('../php/deslogearUsuario.php','../index.php');return false;" >Salir</a>	
		</div>
			
	</body>

</html>