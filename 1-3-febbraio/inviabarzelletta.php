<?php
// Gestisco la sessione
session_start();

if(!isset($_SESSION['utente'])) {
	/**
	* Se l'utente non ha fatto il login (e quindi non è 
	* stata creata la variabile $_SESSION['utente']), 
	* viene reindirizzato alla pagina del login
	*/
	header("Location: http://www.progetta.altervista.org/barzellette/login.php");
}
else {
	/**
	* Se, invece, l'utente si è loggato, gli viene 
	* mostrata la possibilità di inserire una nuova 
	* barzelletta
	*/
include 'inc/header.php';
?>

<h1>Invia la tua barzelletta</h1>
<!-- Form per inserire una barzelletta -->
<form method="POST" action="assets/gestisciinvio.php">
	
	
	<!-- Titolo -->
	<label for="titoloBarzelletta">Titolo</label>
	<input type="text" name="titoloBarzelletta" id="titoloBarzelletta">
	<!-- Fine titolo -->
	
	<!-- Testo -->
	<label for="testoBarzelletta">Testo</label>
	<textarea name="testoBarzelletta" rows="7"></textarea>
	<!-- Fine testo -->
	
	<!-- Scelta della categoria -->
	<label for="sceltaCategoria">Scegli la categoria</label>
	<select name="sceltaCategoria">
		<option value="null">--</option>
		<?php
		/**
		* 
		* Voglio che nel menu a tendina venga mostrato 
		* l'elenco delle categorie messe nel database.
		* Per questo mi collego al database e prendo
		* l'elenco dalla tabella categorie
		* 
		*/
			$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME); // Mi collego al database
			
			$sql = "SELECT * FROM categorie";
			
			if($risultato = $ciccio->query($sql)) {
				while($riga = $risultato->fetch_array()){
				?>
				<option value="<?php echo $riga['id']; ?>"> 
					<?php echo $riga['nome']; ?>
				</option>
		<?php	
				}
			}
		?>
	</select>
	<!-- Fine della scelta della categoria -->
	
	<!-- Bottone d'invio -->
	<input type="submit" value="Invia la tua barzelletta">
	<!-- Fine Bottone d'invio -->
	
</form>





<?php
include 'inc/footer.php';
}
?>
