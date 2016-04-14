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
        <!--Final de Lógica-Programación -->
		

	</head>
<?php 
  require_once '../clases/controlDeSesion.php';
  session_start();  
  ControlDeSesion::estaSeteado('registrado', '../index.php');
?>  	
	<body>
		<div class="CajaArriva animated bounceInUp">
			<a  class="MiBotonUTNLinea" onclick="location.href='../index_ejercicios.php'" >Men&uacute; Principal</a>
		</div>
		<br>
		<br>
		<div class="CajaArriva animated bounceInUp">
				<a  class="MiBotonUTNLinea" onclick="deslogear('../php/deslogearUsuario.php','../index.php');return false;" >Salir</a>	
		</div>

		<div class="CajaInicio animated bounceInRight">
			<h1>Ejercitaci&oacute;n: </br> de entrada/salida, concatenaci&oacute;n, operaciones aritm&eacute;ticas</h1>
			<form id="FormIngreso">
					<img src="proceso.png" style=" width: 546px; float: right;">
					
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-1.php'" >Ejercicio 1 
						<img src="../imagenes/check.png"/> </a> 
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-2.html'" >Ejercicio 2 
						<img src="../imagenes/check.png"/> </a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-3.html'" >Ejercicio 3
					    <img src="../imagenes/check.png"/> </a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-4.html'" >Ejercicio 4
					    <img src="../imagenes/check.png"/> </a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-5.html'" >Ejercicio 5</a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-6.html'" >Ejercicio 6</a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-7.html'" >Ejercicio 7</a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-8.html'" >Ejercicio 8</a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-9.html'" >Ejercicio 9</a>
					<a  class="MiBotonUTNMenu" onclick="location.href='EntradaSalida-10.html'" >Ejercicio 10</a>
					
			</form>
			

		</div>

		<center>
			
		</center>

	</body>
</html>