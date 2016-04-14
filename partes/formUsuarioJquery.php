<!--<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="denker">

    <title> Registrar usuario </title>

    <!--Estilos-->  
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ingreso.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <link rel="stylesheet" type="text/css" href="../animacion.css">  
    <!--final de Estilos-->

   <!--Lógica-Programación-->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
    <script type="text/javascript" src="../js/funcionesLogin.js"></script>
    <script type="text/javascript" src="../js/funcionesABM.js"></script>
    <!--Final de Lógica-Programación -->

  </head>
<?php 
 
session_start();
if(!isset($_SESSION['registrado'])){  ?>

	<body>
		<div class="CajaUno animated bounceInDown">		
        <h1>Registración de usuario</h1>
    		<form id="FormIngreso" onsubmit="GuardarUsuario();return false;">    
        		<label for="nombre" class="sr-only">Nombre</label>
            <input class="form-control" name="nombre" type="text" placeholder="Nombre" maxlength="50" value="" id="nombre" required="" autofocus="">
        
        		<label for="apellido" class="sr-only">Apellido</label>
            <input class="form-control" name="apellido" type="text" placeholder="Apellido" maxlength="50" value="" id="apellido" required="" autofocus="">
        		
            <label for="email" class="sr-only">E-mail (sera su nombre de usuario)</label>
            <input class="form-control" name="email" type="email" value="" id="email" placeholder="E-mail (sera su nombre de usuario)" maxlength="50" required="" autofocus="">
        		<br>
            <label for="pass" class="sr-only">Clave</label>
            <input class="form-control" name="pass" type="password" value="" id="pass" placeholder="Clave" minlength="6" required="" autofocus="">
            <br>
            <label for="pass" class="sr-only">Confirmar Clave</label>
            <input class="form-control" name="pass2" type="password" value="" id="pass2" placeholder="Confirmar Clave" minlength="6" required="" autofocus="">
            <br>
            <input type="text"  class="form-control" readonly id="MensajeError" >       
            <p><input type="hidden" name="rol" id="rol" value="usuario" readonly></p>
            <p><input class="btn btn-primary" type="submit" value="Guardar Usuario" name="btnRegistro"></p>
            <p><input class="btn btn-success" onClick="location.href = '../index.php'" type="button" value="Volver al Login"></p>
    		</form>
		</div>
	</body >
  <?php }
  else
        { 
          echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";?>         
          <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
  <?php } ?>
    
        