<?php

/**
* Clase ControlDeSesion donde controla la varialbe de sesion
*/
class ControlDeSesion 
{
// control si la varialbe de sesion esta seteada
	public static function estaSeteado($pvi_variable_sesion, $pvi_redirigir_pagina)
	{
	  if (!isset($_SESSION[$pvi_variable_sesion]))
      { 
		/* CCW Si la variable de sesion no esta seteada se hace redirigir la página a index.html para
   			el usuario se logee*/   
   		   header("location:$pvi_redirigir_pagina");
      }  
 
	}
}

?>