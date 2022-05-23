<?php

require_once '.\connect.php';

$password=$_POST['passw'];
$hash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (nome,cognome,username,password,eta,indirizzo,mail) 
		VALUES ('".$_POST['nome']."','".$_POST['cognome']."','".$_POST['user']."','".$hash."','".$_POST['eta']."','".$_POST['indirizzo']."','".$_POST['mail']."')";
		
	
        $strSQL = $mysqli->query($sql);

        



$strSQL = $mysqli->query($sql);

echo "registrazione effettuata con successo";

echo"<h1><a href=Km_zero.html>HOME</a></h1>";
	
?>