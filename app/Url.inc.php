<?php

class Url
{
  private $url;
  private $url_cargadas=false;
  private $respuesta=array();
  private $cliente_peticion;
  private $tipo_peticion;
  private $parametros_peticion;  
  

  function __construct($peticion)
  {
    
    $this->url = $this->construir_url_localhost($peticion['REQUEST_URI']);
    //$this->url = $this->construir_url_server($url_actual);
    $this->cliente_peticion = $this->crear_cliente($peticion);

  }
  public function cliente_peticion(){
    return $this->cliente_peticion;
  }
  private function crear_cliente($peticion){
    return (object)array_change_key_case($peticion, CASE_LOWER );
  }
  private function construir_url_server($url){

    $urls = substr($url,1,strlen($url));
    $respuesta = explode('/',$urls);
    if($respuesta[0]==''){
      $respuesta = '/';
    }
    return $respuesta;
    
  }

private function construir_url_localhost($url){

  $urls = substr($url,1,strlen($url));
  $url_txt = substr($urls,strpos($urls,'/')+1,strlen($urls));
  $respuesta = explode('/',$urls);

  if($respuesta[1]==''|| strlen($respuesta[1])===0){
    
    //aca entra si estoy en local host porque se inventa el pseudo entonces lo saco y dejo el aray solo con "/"
    $respuesta[0]= '/';
    unset($respuesta[1]);

  }
  else{
    unset($respuesta[0]);
    $respuesta = array_values($respuesta);
    array_push($respuesta,$url_txt);
  }
  
  return $respuesta;

}

public function url_actual(){
  return $this->url;
}





}
/**
 *
 */








 ?>
