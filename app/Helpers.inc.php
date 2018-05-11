<?php

class Helper
{
//lo que quiero hacer es que se fije si existe el html
// de la web que estoy solicitando:
//si existe que lo lea desde el servidor
//si no existe que haga la peticion ,lo limpie y lo guarde.

	public static function existeCurso($carpeta){
		$existe = is_dir($carpeta);
		return $existe;
	}
	public static function crearCarpeta($carpeta){
		$creado = mkdir($carpeta,0600);
		return $creado;
	}
	public static function obtenerCarpetaCurso($url){
		$path = "cursos/";
		$cur = self::quitarBarras($url);
		$carpeta = $path.$cur;
		return $carpeta;
	}
	public static function obtenerHtmlCurso($url,$html){

		$carpeta = self::obtenerCarpetaCurso($url).'/';
		$cur = self::quitarBarras($url);
		$archivo = $carpeta.$cur.'.html';
		$respuesta = array();
		$contenido;
		if(!file_exists($archivo)){
			$root = "https://platzi.com".$url;
			$file = file_get_contents($root);
			$html->load($file);
			$login = $html->find('.PreRegisterForm',0);
			$login->parent()->outertext='';
			$figures = $html->find('figure img');
			foreach ($figures as $value) {
				$value->outertext='<img alt ="Fake Jhon " src="public/imgs/jhon.png">';
			}
			$content = $html->find('[data-reactid=110]',0);
			$nuevoArchivo = fopen($archivo,'w');
			fwrite($nuevoArchivo,$content);
			$contenido = $content;
		}
		else{

			$contenido = file_get_contents($archivo);

		}

		return $contenido;
	}
	public static function guardarHtml($file,$html){
		$texto='';
		if(file_exists( $file )){
			$texto = file_get_contents($file);
		}
		return $texto;
	}
	private function quitarBarras($texto){
		return stripslashes(str_replace('/', '', $texto));
	}
	public static function aDiv($class){
		return '<div class="'.$class.'">';
	}
	public static function cDiv(){
		return '</div>';
	}
	public static function cH1($texto,$clase=''){
		return '<h1 class="'.$clase.'">'.$texto.'</h1>';
	}
    public static function redirigir($url){
        header('Location: ' .$url,true,301);
        exit();
    }

	public static function obtenerFecha($html){

	$fecha = $html->find('.techo h2 b')[0];
	$contenedor = Helper::aDiv('contenedor-fecha');
	$btnback = '<button id="back" data-pag ="0" class="btn verde" title="Ver Anterior"><<</button>';
	$btnsig = '<button id="sig" data-pag= "0" class="btn verde" title="Ver Siguiente">>></button>';
	$fechas ='<h6 class="titulo-fecha">'. $fecha.'</h6>';
	$cierra = Helper::cDiv();
	$final = $contenedor.$btnback.$fechas.$btnsig.$cierra;
	return $final;
	}



}

 ?>
