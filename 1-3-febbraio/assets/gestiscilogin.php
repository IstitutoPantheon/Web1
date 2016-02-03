<?php
	session_start();
	require 'db.php';
	
	$nome = htmlspecialchars($_POST['nomeUtente']);
	$password = htmlspecialchars($_POST['passwordUtente']);
	$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	
	$sql = "SELECT * FROM autori WHERE nome='" . $nome . "' AND password='" . $password . "'";
	
	if($risultato = $ciccio->query($sql)) {
		if($risultato->num_rows > 0) {
			/**
			* 
			* Se i risultati nel database sono più di 0
			* (e abbiamo ipotizzato che dunque siano 1)
			* creo una variabile di sessione "utente"
			* e dirotto l'utente nella pagina di invio
			* barzelletta, che ora lo riconoscerà
			* 
			*/
			$_SESSION['utente'] = $nome;
			header("Location: http://www.progetta.altervista.org/barzellette/inviabarzelletta.php");
		}
		else {
			echo "c'è stato un errore";
		}
	}
?>
