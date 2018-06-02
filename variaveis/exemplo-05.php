<?php

$nome = "Glaucio";

function teste() {

  global $nome;
  echo $nome;

}

function teste2(){
  $nome = "Joao";
  echo $nome. " - " . "Agora no teste 2";

}

teste();

echo "<br/>";

teste2();

?>
