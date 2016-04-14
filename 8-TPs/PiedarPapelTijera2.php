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
			<!--AngularJS-->
			<!--<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>-->
			<script src="../bower_components/angular/angular.min.js"></script>
			<!--<script type="text/javascript" src="jsPiedarPapelTijera2.js"></script>-->
			<script type="text/javascript" src="app.js"></script>
			<script type="text/javascript" src="controllerppt2.js"></script>
        <!--Final de Lógica-Programación -->
		

		</head>
<?php 
  require_once '../clases/controlDeSesion.php';
  session_start();  
  ControlDeSesion::estaSeteado('registrado', '../index.php');
?> 		
	<!--<body onload="comenzar()">-->
		<body ng-app="MiApp" ng-init="ganadas;perdidas;empatadas" ng-controller="contppt2"> 
		<div class="CajaUno animated bounceInDown">
			

			<input type="text" readonly ng-model="ganadas">
			<input type="text" readonly ng-model="perdidas">
			<input type="text" readonly ng-model="empatadas">
			<input type="text" ng-model="MiTest">
			<p ng-bind = "MiTest"> </p>
			{{MiTest}}
			<form id="FormIngreso">
				<center>
					<img src="imagenes/interrogacion.jpg" >
				</center>
				
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft">
			

			
		  <img class="PiedraPapelTijera animated zoomInRight " src="imagenes/piedra.jpg" 
		  		ng-click="verificador('piedra')">
		  <img class="PiedraPapelTijera animated zoomInUp" src="imagenes/papel.jpg" 
		  		ng-click="verificador('papel')">
		  <img class="PiedraPapelTijera animated zoomInLeft" src="imagenes/tijera.jpg" 
		  		ng-click="verificador('tijera')">
			<!--<img class="PiedraPapelTijera animated zoomInRight " src="imagenes/piedra.jpg" ng-click="piedra()">
			<img class="PiedraPapelTijera animated zoomInUp" src="imagenes/papel.jpg" ng-click="papel()">-->
			<!--<img class="PiedraPapelTijera animated zoomInLeft"  src="imagenes/tijera.jpg" ng-click="perdidas=perdidas+1">
			<img class="PiedraPapelTijera animated zoomInLeft"  src="imagenes/tijera.jpg" ng-click="tijera()">-->
			

			


		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
				<h3>
						3.	Piedra, Papel o Tijera (v 2.0):
						</br>	Ahora debemos informar cuantas veces se ganó, perdió o empató desde la última recarga de página

				</h3>
			
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a style=" margin-top: -90%;" class="MiBotonUTNLinea" onclick="location.href='index.php'" >Men&uacute; ejercicios</a>
		</div>
		<div class="CajaAbajo animated bounceInUp">
			<a  style=" margin-top: -75%;" class="MiBotonUTNLinea" onclick="deslogear('../php/deslogearUsuario.php','../index.php');return false;" >Salir</a>
		</div>
	</body>
</html>