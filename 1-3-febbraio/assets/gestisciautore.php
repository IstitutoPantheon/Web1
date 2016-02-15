<?php
	require 'funzioni.php';
	
	$azione = $_GET['azione'];
	
	if($azione == "inserisci") {
		$nomeAutore = htmlspecialchars($_POST['nomeAutore']);
		$emailAutore = htmlspecialchars($_POST['emailAutore']);
		$passwordAutore = md5($_POST['passwordAutore']); // md5 modifica la stringa in una stringa di 32 caratteri. Viene usato per una questione di sicurezza
		
		creaAutore($nomeAutore, $emailAutore, $passwordAutore);
		print($risposta); // Stessa cosa di echo
	}
?>
