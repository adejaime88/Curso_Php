<?php

$frase = "A repetição é mãe da retenção";

echo "$frase<br>";

$palavra = "mãe";

$q = strpos($frase, "mãe");

var_dump($q);

echo "<br/>";

$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br/>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);
?>
