<?php 
session_start();
Class Controller {
	public function ConnexionBase(){
		if(PHP_OS == "Darwin") $dbh = new PDO('mysql:host=localhost:8889;dbname=bo_sos', 'root','root'); //Unix
		else $dbh = new PDO('mysql:host=localhost;dbname=sos', 'root',''); //Window

		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function DisplayError(){
		/*Gestion des erreurs */
		foreach ($errors as $error => $e) {
			print "Erreur : " . $e . "<br/>";
		}	
	}


	// catch (PDOException $e)
	// {
	//     print "Erreur !: " . $e->getMessage() . "<br/>";
	//     die();
	// }
}

