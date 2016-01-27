<?php
	require 'assets/db.php'; // "incorporo" il file con i dati per accedere al database
	
	$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME); // mi collego al database
	
	$username = $_GET['username']; // prendo il nome utente scritto nel form
	
	$password = $_GET['password']; // prendo la password scritta nel form
	
	$sql = "SELECT * FROM utenti WHERE nome_utente = '" . $username . "' AND password = '" . $password . "'"; // Preparo la query
	
	$risultato = $mysqli->query($sql); // invio la query al database
	
	if($risultato->num_rows == 1) { // Verifico che il numero di righe che ho trovato sia 1
		echo "<h1>Ciao " . $username . "!!!</h1>";
	}
	else { // non vengono trovati risultati utili
		echo "<p>C'è un problema</p>";
	}

?>
