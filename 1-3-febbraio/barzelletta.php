<?php
include 'inc/header.php';

// Stabilisco di quale barzelletta devo mostrare i dati
$barzelletta = $_GET['id'];

// Preparo la query
$sql = "SELECT * FROM barzellette WHERE id='" . $barzelletta . "'";

// Mi collego al database
$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if($risultato = $ciccio->query($sql)) {
?>
<div class="col-md-12">



<?php
	while($riga = $risultato->fetch_array()) {
?>
	<h1> 
	<!-- Faccio comparire il titolo della barzelletta -->
		<?php echo $riga['titolo']; ?>
	</h1>
	
	<p>
	<!-- Faccio comparire il testo della barzelletta -->
		<?php echo $riga['testo']; ?>
	</p>
</div>
<div class="col-md-6">
	
<?php
	/* Preparo una query che trovi il nome della categoria in cui è pubblicata la barzelletta. Lo faccio perché quando ho trovato la barzelletta in $sql, nel campo "categoria" avevo solo un numero che corrispondeva all'id della categoria stessa. Per fare in modo che quello stramaledetto numero diventi il nome vero della categoria, vado a cercare nella tabella "categorie" a quale nome corrisponde quell'id che avevo trovato.	*/
		$sql2 = "SELECT nome FROM categorie WHERE id='" . $riga['categoria'] . "'";
		
		if($risultato2 = $ciccio->query($sql2)) {
			while($riga2 = $risultato2->fetch_array()) {
?>
	<p>Pubblicata nella categoria <?php echo $riga2['nome']; ?></p>
<?php
			}
		}
	}
}



?>

<?php
include 'inc/footer.php';
?>
