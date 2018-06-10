<?php

require_once("config.php");

//session_start();

//apaga parte da sessao
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//destroi a sessao
session_destroy();


?>
