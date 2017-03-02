<?php

namespace App;

use \PDO;

class Database{

	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;



	public function __contruct($db_name, $db_user = 'maelmayoezsio', $db_pass = 'Akckn0rc3', $db_host = 'maelmayoezsio.mysql.db'){
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}

	private function getPDO(){
		if($this->pdo === null){
			$pdo = new PDO('mysql:host=maelmayoezsio.mysql.db;dbname=maelmayoezsio', 'maelmayoezsio','BtsSIO2016'); //Unix
			$pdo->exec("SET CHARACTER SET utf8"); //Bien vue Maxime !
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
		}
		return $this->pdo;
	}

	// public function __contruct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost:8889'){
	// 	$this->db_name = $db_name;
	// 	$this->db_user = $db_user;
	// 	$this->db_pass = $db_pass;
	// 	$this->db_host = $db_host;
	// }

	// private function getPDO(){
	// 	if($this->pdo === null){
	// 		$pdo = new PDO('mysql:host=localhost:8889;dbname=sos', 'root','root'); //Unix
	// 		$pdo->exec("SET CHARACTER SET utf8"); //Bien vue Maxime !
	// 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 		$this->pdo = $pdo;
	// 	}
	// 	return $this->pdo;
	// }

	public function query($statement){
	    if(substr($statement, 0, 6) === "SELECT"){    
	    	$req = $this->getPDO()->query($statement);  
	        $datas = $req->fetchAll(PDO::FETCH_OBJ);
	        return $datas;
	    }
	}

	public function prepare($statement){
		$req = $this->getPDO()->prepare($statement);
		$req->execute();
	}

}