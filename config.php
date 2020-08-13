<?php
require 'environment.php';
require 'vendor/autoload.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/grupoCoser/");
	define("SMTP_MAIL", [
		'host'=>'mail.altamenterentavel.com',
		'port'=>'465',
		'user'=>'alison@altamenterentavel.com',
		'passwd'=>',G8IS)XGJ42I',
		'from_name'=>'Grupo Coser',
		'from_email'=>'originalalison@gmail.com'
	]);
	$config['dbname'] = 'contrato';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://localhost/contrato/");
	define("SMTP_MAIL", [
		'host'=>'',
		'port'=>'',
		'user'=>'',
		'passwd'=>'',
		'from_name'=>'Grupo Coser',
		'from_email'=>'oroginalalison@gmail.com'
	]);
	$config['dbname'] = 'altame51_coserSalvador';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'altame51_gCoser';
	$config['dbpass'] = 'yN%8*(C^52$A';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>