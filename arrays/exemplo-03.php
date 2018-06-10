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

//print_r($pessoas);

print_r($pessoas[0]['nome']);

/*
foreach($pessoas as  $pessoa){
echo "Meu nome eh: ".$pessoa["nome"]." - Minha idade eh: ".$pessoa["idade"]."<br>";
}
*/
 ?>
