<?php 
ini_set('display_errors', '1');

$db = new PDO('mysql:host=maelmayoezwell.mysql.db;dbname=maelmayoezwell;charset=utf8','maelmayoezwell','Akckn0rc3');

$result = mysql_query("SELECT * FROM table blog") or die(mysql_error(blog));

$types = array();

while(($row =  mysql_fetch_assoc($result))) {
    $types[] = $row['type'];
}

for ($x = 0; $x < mysql_num_rows($result); $x++){
 $row = mysql_fetch_assoc($result);  
 echo $row['type']; 
}

?>