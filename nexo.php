<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'GuardarUsuario':
        session_start();
        $nombre=$_POST['nombre'];        
		$apellido=$_POST['apellido'];        
		$email=$_POST['email'];
		$fechaingreso=$_POST['fechaingreso'];
		$rol=$_POST['rol'];
//la contraseña se encripta        
        $pass= sha1($_POST['pass']); 
        $pass2=sha1($_POST['pass2']);
        $usuario=usuario::TraerUnUsuarioMail($email);
        if ($usuario->mail === $email)
         {
        	echo "UserExiste";
         }
        else 
         {         
	        if ($pass === $pass2)
	        	{
		        		$usuario = new usuario();
		        		$usuario->nombre = $nombre;
		        		$usuario->apellido = $apellido;
		        		$usuario->mail = $email;
		        		$usuario->fechaingreso = $fechaingreso;
		        		$usuario->clave = $pass;
		        		$usuario->rol = $rol;
		        		$IdInsertado = $usuario->InsertarUsuario( 
		        									$usuario->nombre,        									
		  											$usuario->apellido,
		    										$usuario->sexo,
		    										$usuario->idprovincia,
		    										$usuario->localidad,
		    										$usuario->domicilio,
		    										$usuario->fechaingreso,
		  											$usuario->mail,
		  											$usuario->clave,
		    										$usuario->foto,
		    										$usuario->rol );
	        	}
	        else
	            {
	            	echo "PassNoCoincide";
	            }
	     }      			
		break;	
	default:
		# code...
		break;
}

 ?>