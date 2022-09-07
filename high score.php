<?php

$puntajes = array(120, 70, 50, 200, 170, 110);
$punt= count($puntajes);

function puntuacionalta($puntajes, $punt){

  $mayor=0;
  foreach ($puntajes as $valor) {
    if ($valor>$mayor)
     $mayor = $valor;

}

  return $mayor;

}

function ultimapuntuacion($puntajes, $punt){

for ($i=0; $i <= $punt; $i++) {

$up=$punt;
$punt=$puntajes[$i];

}
return $up;
}

function puntajesaltos($puntajes, $punt){

}
echo "<h4>El puntaje mas alto es:<h4> ".puntuacionalta($puntajes, $punt);
echo "<br></br>";
echo "<h4>El ultimo puntaje fue :<h4> ".ultimapuntuacion($puntajes, $punt);
echo "<br></br>";
echo "<h4>Estas son las puntuaciones mas altas:</h4>".puntajesaltos($puntajes, $punt);
echo "<br></br>";

print_r($puntajes);

/*
$puntajes = array(120, 70, 50, 200, 170, 110);
function NumeroMayor($puntajes)
{
  $mayor=0;
  foreach ($puntajes as $valor) {
    if ($valor>$mayor)
     $mayor = $valor;
  }
  return $mayor;
}
echo NumeroMayor($puntajes);
*/
?>