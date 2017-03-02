<?php

namespace App;

class Autoloader{

	static function register(){

		//Display error (A bouger)
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	

		spl_autoload_register(array(__CLASS__,'autoload'));

	}

	static function autoload($class){

		echo __NAMESPACE__;

		if(strpos($class, __NAMESPACE__ . '\\') === 0){

			$class = str_replace(__NAMESPACE__ . '\\', '', $class);

			$class = str_replace('\\','/',$class);

			require __DIR__ . '/' . $class . '.php';


		}

	}

}