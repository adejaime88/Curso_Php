<?php

$nome = (int)$_GET["a"];
$nome = (int)$_GET["b"];

//var_dump($nome);

//Pegar ip do cliente
//$ip = $_SERVER["REMOTE_ADDR"];

//Nome da pagina que usuario acessou
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

///////////////////////////////
/*
Barra de endereço = URL
URL é dividida em varias partes:
PROTOCOLO + DOMINIO + PATH + QueryString + HASH
https://www.google.com.br/search?source=hp&ei=zWwQW5XhAsOiwATr4pWwDg&q=teste&oq=teste&gs_l=psy-ab.3..35i39k1l2j0i67k1j0l7.2629.3053.0.3165.6.5.0.0.0.0.196.196.0j1.1.0....0...1c.1.64.psy-ab..5.1.196.0...0.Agwq5shMm44
*/

 ?>
