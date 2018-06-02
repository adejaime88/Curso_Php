<?php

$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br/>";

$resultado1 = (10 + 3) / 2;

echo $resultado1;

echo "<br/>";

//&& as 2 conficoes precisao ser verdadeira para resultado verdadeiro
$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado2);

echo "<br/>";

//|| pelomenos 1 condicao precisa ser verdadeira para resultado verdadeiro
$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado2);

?>
