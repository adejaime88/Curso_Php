<?php

$json = '[{"nome":"jo\u00e3o","idade":29},{"nome":"maria","idade":45}]';

// true transforma em array
$data = json_decode($json, true);

//var_dump($data);

//Print array
print_r($data);

 ?>
