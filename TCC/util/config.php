<?php
     define ('DB_HOST','localhost');
	 define ('DB_USER','root');
	 define ('DB_PASSWORD','');
	 define ('DB_DB','admin');

$request = "http://" . $_SERVER['SERVER_NAME'];
define('BASE_URL', $request.'/tcc/');


session_start();
ob_start();

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");

date_default_timezone_set('America/Sao_Paulo');
