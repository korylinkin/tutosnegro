<?php


$respuesta=array();
$respuesta['exito'] = false;
$errores=array();
$data=array();
$resultado=0;
if (isset($_POST['data']) && !empty($_POST['data'])) {
  $datos = $_POST['data'];
//esta todo piola pero no sabemos si hay algo vacio.
foreach ($_POST['data'] as  $dato) {
  $valor = $dato['value'];
  $vacio = Helper::estaVacio($valor);
  if ($vacio) {
    //una vez que esta vacio genero el texto del error.
    //esto significa que hay algo vacio y por lo tanto errores
    $errores[]= Helper::crearErrores($dato);
  }
}
if(count($errores)==0){
  $resultado = ((int)$datos[0]['value']-
              (int)$datos[1]['value']+
              (int)$datos[2]['value']+
              (int)$datos[3]['value']+
              (int)$datos[4]['value']+
              (int)$datos[5]['value']+
              (int)$datos[6]['value'])/4;
$respuesta['resultado'] = $resultado;
$respuesta['exito'] = true;
}

}
$respuesta['errores'] = $errores;
echo json_encode($respuesta);
 ?>
