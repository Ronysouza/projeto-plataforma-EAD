<?php

session_start();
require 'Config.php';

error_reporting(E_ALL);
ini_set("display_errors", "On");

spl_autoload_register(function($class){

	if(file_exists('Controllers/'.$class.'.php')){

		require 'Controllers/'.$class.'.php';

	}else if(file_exists('Models/'.$class.'.php')){

		require 'Models/'.$class.'.php';
	}else if(file_exists('Core/'.$class.'.php')){

		require 'Core/'.$class.'.php';

	}


});


$core = new Core();
$core->run();






?>



	



