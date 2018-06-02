<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "";*/

//Na linha de baixo temos uma variavel com numero no nome
$nome1 = "João";

$sobreNome = "Rangel";

$nomeCompleto = $nome1 ." " . $sobreNome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

//destruir a variavel
unset($nome1);

//isset verifica se a variavel existe
if (isset($nome1)){
    echo $nome1;
}

?>
