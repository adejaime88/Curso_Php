<?php

$pessoas = array();

array_push($pessoas, array(
  'nome'=>'joao',
  'idade'=>29

));

array_push($pessoas, array(
  'nome'=>'maria',
  'idade'=>45

));

echo json_encode($pessoas);
 ?>
