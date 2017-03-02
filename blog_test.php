<?php
$user = "maelmayoezmayon";
$pass = "Akckn0rc3";

try {
    $dbh = new PDO('mysql:host=mysql55-39.perso;dbname=maelmayoezsio', $user,$pass);		
    foreach($dbh->query('SELECT * from blog') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
