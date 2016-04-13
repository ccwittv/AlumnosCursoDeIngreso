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

        <!--Final de Lógica-Programación -->


	</head>
<?php  
  session_start();
  if(isset($_SESSION['registrado']))
   {  
?>		
	<body>
		<div class="CajaInicio animated bounceInRight">
			<h1>UTN FRA</h1>
			<form id="FormIngreso">

					<img src="inicio.png" style="width: 500px;float: right;">


				<a  class="MiBotonUTNMenuInicio" onclick="location.href='1-EntradaSalida/index.html'" >E/S de datos</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='2-InstruccionIf/index.html'" >Instrucci&oacute;n 'if'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='3-InstruccionSwitch/index.html'" >Instrucci&oacute;n 'Switch'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='4-Tiempo/index.html'" >Manejar el tiempo</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='5-InstruccionWhile/index.html'" >Iteraciones 'WHILE'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='6-InstruccionFor/index.html'" >Iteraciones 'FOR'</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='7-Vectores/index.html'" >Vectores</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='8-TPs/index.html'" >TPs</a>				
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
<?php 
   }
  else
   { 
      echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";
      header("Location: index.php");
   } 
?>	
</html>
