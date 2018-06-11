<?php

function ola(){

  $argumentos = func_get_args();

  return $argumentos;


}

print_r(ola("Bom Dia"));

echo "<br>";

var_dump(ola("Bom Dia",10));

 ?>
