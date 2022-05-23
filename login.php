<?php

require_once '.\connect.php';


$userPassword=$_POST['passw'];
$username=$_POST['user'];

$sql = "SELECT COUNT(username)
        FROM users
		WHERE username='$username'";
		
     
        $strSQL = $mysqli->query($sql);

        while($row = $strSQL->fetch_array(MYSQLI_ASSOC)){
            $ris=implode($row);
        }


        

$sql="SELECT password
      FROM users
      WHERE username='$username'";


$strSQL = $mysqli->query($sql);

while($row = $strSQL->fetch_array(MYSQLI_ASSOC)){
    $hashedPassword=implode($row);
}


if (password_verify($userPassword, $hashedPassword) && $ris==1 ) {
    echo "Accesso effettuato con successo";
    echo"<h1><a href=ondemands.php>AREA RISERVATA</a></h1>";
} else {
    echo "La password inserita non è corretta o l'utente errato";
}
	
?>