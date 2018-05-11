<?php
//info base de datos
define('NOMBRE_SERVIDOR','localhost');
define('NOMBRE_USUARIO','root');
define('PASSWORD','');
define('NOMBRE_BD','quinielas');
//rutas de la web
define('LOCALHOST','dream');
define('WEB','http://localhost'.LOCALHOST);
define('INDEX_URL','/');

define('PUBLICO','public/');
define('RUTA_APP','app/');
//recursos
define('RUTA_CSS', PUBLICO.'css/');
define('RUTA_JS', PUBLICO.'js/');
//RUTAS RESPONSIVE
define('CSS_FHD','<link rel="stylesheet" type="text/css" media="(min-width:1380px)" href="'.RUTA_CSS.'responsive/responsive_fhd.css">');
define('CSS_HD','<link rel="stylesheet" type="text/css" media="(min-width:768px) and (max-width:1380px)" href="'.RUTA_CSS.'responsive/responsive_hd.css">');
define('CSS_MOBIL','<link rel="stylesheet" type="text/css" media="(min-width:320px) and (max-width:468px)" href="'.RUTA_CSS.'responsive/responsive_m.css">');
define('IMPORTAR_RESPONSIVE',CSS_FHD.PHP_EOL.CSS_HD.PHP_EOL.CSS_MOBIL);
