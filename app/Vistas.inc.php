<?php

include_once 'app/Url.inc.php';
class Vistas 
{

		/*public static function CrearVista($ruta,$exito){
		 	if($exito){

		 	ob_start();
		    include($ruta);
		    $var=ob_get_contents(); 
		    ob_end_clean();
		    return $var;
		 		
		 	}
		 	else{
		 		return '404';
		 	}
		 }*/

		 public static function CrearVista($enrute){
		 	if($enrute['exito']){

		 	ob_start();
		    include($enrute['vista']['url']);
		    $var=ob_get_contents(); 
		    ob_end_clean();
		    return $var;
		 		
		 	}
		 	else{
		 		return '404';
		 	}
		 }



}




 ?>
