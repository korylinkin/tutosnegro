<?php
include_once 'app/Rutas.inc.php';
include_once 'app/Helpers.inc.php';
include_once 'app/Vistas.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/enrute.php';
include_once 'app/config.inc.php';
include_once 'simple_html_dom.php';

$ruta = new Rutas($_SERVER);
$enrutando = $ruta->enrutamiento();

//echo var_dump($ruta->test());
//echo var_dump($_SERVER);
if($ruta->cliente_peticion()->request_method =='POST'){
	echo Vistas::CrearVista($enrutando) ;
}else{

include_once 'vistas/base.php';

}

?>
