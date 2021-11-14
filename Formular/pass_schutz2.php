<?php
	$pass = $_POST["passwort"];

	if ($pass == "durand"){
		$vorname = $_POST["Vorname"];
		$nachname = $_POST["Nachname"];

		echo "Herzlich Wilkommen " .$vorname. " " .$nachname;
	}
	else{
		echo "Error";	
	}
?>