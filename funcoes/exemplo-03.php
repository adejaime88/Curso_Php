<?php

function ola($texto, $periodo = "Bom Dia"){

  return "Olá $texto! $periodo<br>";

}


echo ola("mundo");

echo ola("Mundo", "Boa Noite");


echo ola("mundo", "Tarde");
echo ola("Glaucio", "");
echo ola("Junior");


 ?>
