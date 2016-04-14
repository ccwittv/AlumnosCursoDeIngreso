<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 		<link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
 		<script type="text/javascript" src="js/funcionesLogin.js"></script>
        <!--Final de Lógica-Programación -->


	</head>
<?php 

  require_once 'clases/controlDeSesion.php';
  session_start();  
  ControlDeSesion::estaSeteado('registrado', 'index.php');
?>		
	<body>
		<div class="CajaArriva animated bounceInUp">
				<a  class="MiBotonUTNLinea" onclick="deslogear('php/deslogearUsuario.php','index.php');return false;" >Salir</a>	
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>UTN FRA</h1>
			<form id="FormIngreso">

					<img src="inicio.png" style="width: 500px;float: right;">


				<a  class="MiBotonUTNMenuInicio" onclick="location.href='1-EntradaSalida/index.php'" >E/S de datos</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='2-InstruccionIf/index.html'" >Instrucci&oacute;n 'if'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='3-InstruccionSwitch/index.html'" >Instrucci&oacute;n 'Switch'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='4-Tiempo/index.html'" >Manejar el tiempo</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='5-InstruccionWhile/index.html'" >Iteraciones 'WHILE'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='6-InstruccionFor/index.html'" >Iteraciones 'FOR'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='7-Vectores/index.html'" >Vectores</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='8-TPs/index.php'" >TPs</a>				
				<a  class="MiBotonUTNMenuInicio" target="_blank" href='Guia de TPs curso de ingreso.pdf' >PDF Tps </a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='9-Parciales/index.html'" >Parciales</a>
				<a  class="MiBotonUTN" target="_blank" href='http://www.w3schools.com/js/default.asp' >W3School JavaScript</a>
				<a  class="MiBotonUTN" target="_blank" href='http://www.w3schools.com/angular/default.asp' >W3School AngularJS</a>				
				<a  class="MiBotonUTN" target="_blank" href='https://angularjs.org/' >AngularJS</a>
				<a  class="MiBotonUTN" target="_blank" href='http://bower.io/' >Bower</a>


			</form>


		</div>

		<center>

		</center>

	</body>

</html>
