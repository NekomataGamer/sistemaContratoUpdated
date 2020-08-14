<?php
require 'environment.php';
require 'vendor/autoload.php';

global $config;
global $db;

$config = array();
define("PATH_SITE", '../');
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/grupoCoser/");
	
	$config['dbname'] = 'contrato';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://cosersalvador.com/contrato/");
	
	$config['dbname'] = 'cosersal_contratos';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'cosersal_bucker';
	$config['dbpass'] = '$_7RKD&xtaf=';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>