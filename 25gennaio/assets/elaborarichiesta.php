<?php
// Assegno a due variabili quello che l'utente ha messo nel form, con la superglobale $_POST
$testoCercato = $_POST['contenutoRicerca'];
$video = $_POST['cercaVideo'];

// Se l'utente ha detto di voler cercare video e ha scritto qualcosa nella casella di testo...
if($video = "si" && $testoCercato != "") {
?>
	<!-- Posso inserire del codice HTML anche uscendo temporaneamente da php (lasciando aperta la parentesi graffa) per rientrarvi dopo -->
	<video poster="selfie.jpg" autoplay>
		<source src="vacanze.ogv"></source>
		<track src="vacanze.vtt" kind="subtitles" label="Italiano" lang="it"></track>
	</video>

<?php
/* Adesso rientro in php, e inizio chiudendo la parentesi graffa: php riconoscerà che questa
è la chiusura della graffa aperta in precedenza */
}
else {
	echo "Ci sono problemi con la tua richiesta";
}
?>
