<?php
	/**
	* Funzione per la creazione di un nuovo autore 
	* di barzellette
	* Quando chiamerò la funzione, dovrò sempre inserire
	* 3 parametri:
	* @param $nome sarà il nome dell'autore
	* @param $email l'email dell'autore
	* @param $password la password dell'autore
	* 
	* I 3 parametri sono necessari perché sono i campi 
	* previsti nella tabella autoriBarzellette
	* 
	* @return 
	*/
	function creaAutore($nome, $email, $password) {
		include 'db.php';
		$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
		
		$sql = "INSERT INTO autoriBarzellette(id, nome, email, password) VALUES(NULL, '" . $nome;
		$sql .= "', '" . $email;
		$sql .= "', '" . $password;
		$sql .= "')";
		
		// INSERT INTO autoriBarzellette (id, nome, email, password) VALUES (NULL, 'Umberto Eco', 'u.eco@unibo.net', 'password');
		
		if($risultato = $ciccio->query($sql)) {
			$risposta = "Nuovo utente inserito con successo";
		}
		else {
			$risposta = "Il nuovo utente non è stato inserito";
		}
		
		return $risposta;
		
	}

?>
