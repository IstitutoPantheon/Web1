<?php
$testoCercato = $_POST['contenutoRicerca'];
$video = $_POST['cercaVideo'];

if($video = "si" && $testoCercato != "") {
?>

	<video poster="selfie.jpg" autoplay>
		<source src="vacanze.ogv"></source>
		<track src="vacanze.vtt" kind="subtitles" label="Italiano" lang="it"></track>
	</video>

<?php
}
else {
	echo "Ci sono problemi con la tua richiesta";
}
?>
