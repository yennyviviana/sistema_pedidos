<?php


$llave  = $_GET ['lla'];
$imagen = $_GET ['imagen'];


unlink('img/platos/'. $imagen);


$bor    = "delete from carta when id_carta = $llave" ;


$borrar = new sen ($bor, $conexion, 'carta');
$borrar->insedbo ();



header("Location: principal.php?da=1");






?>