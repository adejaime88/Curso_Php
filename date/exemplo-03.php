<?php

date_default_timezone_set('America/Manaus');

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//string strftime ( string $format [, int $timestamp ] )
echo strftime("%A %B");

echo "<br>";

echo ucwords(strftime("%A %B"));


?>
