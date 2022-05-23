<?php

$host="localhost";
$user="root";
$pass="";
$nomeDB="login";


$mysqli = new mysqli ($host, $user, $pass, $nomeDB);

if($mysqli->connect_error)
{
	die('Errore di connessione  ('. $mysqli->connect_errno .')'.$mysqli->connect_error);
}
else
{
	//echo 'connesso' . $mysqli->host_info . ' ' .$mysqli->server_info .' '. $mysqli->server_version . '<br>';
}

?>