<?php

class Helper
{
//lo que quiero hacer es que se fije si existe el html
// de la web que estoy solicitando:
//si existe que lo lea desde el servidor
//si no existe que haga la peticion ,lo limpie y lo guarde.

public static function estaVacio($valor){
  $respuesta = false;
  if(empty($valor) || !isset($valor)){
    $respuesta=true;
  }
  return $respuesta;
}

public static function crearErrores($valor){
  $nombre = $valor['name'];
  $texto = '<li class="list-group-item">Falta Completar '.$nombre.'</li>';
  return $texto;
}



}

 ?>
