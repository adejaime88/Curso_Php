<?php

$pessoa = array(
  'nome'=>'Joao',
  'idade'=>20

);

// & passagem de parametro por referencia
foreach ($pessoa as &$value) {

  if (gettype($value) === 'integer') $value += 10;

  echo $value."<br>";
}

print_r($pessoa);

 ?>
