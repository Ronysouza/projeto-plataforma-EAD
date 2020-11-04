<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){

		define('BASE_URL','http://alunos.r7webdesign.com');
		    
  		$dsn = "mysql:dbname=alunos_rony_mods;host=localhost";		 
 		$dbuser = 'root';
 	    $dbpass  = ''; 


	}

  global $db;

try{
     
  
	
	$db = new PDO($dsn,$dbuser,$dbpass);



}catch(PDOException $e){

	echo 'FALHOU'.$e->getMessage();
	exit;

}

?>