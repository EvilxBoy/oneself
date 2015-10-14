<?php 
$user = 'root';
$passowrd = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysql_connect("$host:$port",
		    $user,$passowrd
        );
		
$db_selected = mysql_select_db($db,$link);

if($link)
{
	var_dump($link);
	echo "connection MYSQL OK ！";
}

?>