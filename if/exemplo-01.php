<?php


$qualSuaIdade = 18;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($qualSuaIdade <= $idadeCrianca) {

  echo "Criança";

} else if ($qualSuaIdade < $idadeMaior) {

  echo "Adolescente";

} else if ($qualSuaIdade <= $idadeIdoso) {

  echo "Adulto";

} else {

  echo "Idoso";

}

echo "<br>";

// ? = entao //     : = else
echo ($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>
