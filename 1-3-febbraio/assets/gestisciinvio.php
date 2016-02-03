<?php
	
	require 'db.php';
	/**
	* Prende i dati dal form e li inserisce nel database
	*/
	
	$titolo = trim(htmlspecialchars($_POST['titoloBarzelletta']));
	
	$testo = trim(htmlspecialchars($_POST['testoBarzelletta']));
	
	$categoria = trim(htmlspecialchars($_POST['sceltaCategoria']));
	
	$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME); // Mi collego al database
	
	$sql = "INSERT INTO barzellette(id, autore, titolo, categoria, testo, dataPubblicazione) VALUES (NULL, NULL, '" . $titolo . "', '" . $categoria . "', '" . $testo . "', '" . date('d/m/Y') . "')";
	
// INSERT INTO barzellette (id, titolo) VALUES (NULL, 'questo è un titolo')
?>
