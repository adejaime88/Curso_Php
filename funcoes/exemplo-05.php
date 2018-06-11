<?php

$a = 10;

//------ oque acontece na funcao so vale dentro da funcao
//function trocaValor($b){

// & passagem de parametro por referencia
function trocaValor(&$b){


    $b += 50;
    return $b;

}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";

// echo fora da funcão
echo $a;

 ?>
