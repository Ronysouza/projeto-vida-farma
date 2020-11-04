<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
 

	}else{

	define('BASE_URL','http://localhost/vidafarma/');

	$dsn = " ";
$dbuser = " ";
     $dbpass = ' ';

$dataBase =  new PDO($dsn, $dbuser, $dbpass);

	}

  global $db;

try{

     //$db = $dataBase;
	
	 


}catch(PDOException $e){

	echo 'FALHOU'.$e->getMessage();
	exit;

}