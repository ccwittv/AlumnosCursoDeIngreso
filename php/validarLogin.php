<?php 
session_start();
require_once"../clases/AccesoDatos.php";
require_once"../clases/usuario.php";

$usuario=$_POST['usuario'];
$clave=sha1($_POST['clave']);
$recordar=$_POST['recordarme'];
$usuarioBuscado = usuario::validarUsuario($usuario,$clave);

/*var_dump($_POST);
echo('<br>');
echo($usuario);
echo('<br>');
echo($clave);
echo('<br>');*/

 if(isset($usuarioBuscado->id))
    {
		if($recordar=="true")
		 {
			setcookie("registro",$usuario,  time()+36000 , '/');
		
		 }
		$_SESSION['registrado']=$usuario;
		$_SESSION['rol']=$usuarioBuscado->rol;
		$retorno="ingreso";
    }
  else
    {
   	    $retorno="No registrado";
    }

  echo $retorno;
?>