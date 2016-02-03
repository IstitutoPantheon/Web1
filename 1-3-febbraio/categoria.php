<?php
include 'inc/header.php';

// Faccio riconoscere la categoria
$categoria = $_GET['cat']; // Se Pierino -> $categoria = 1, se Carabinieri -> $categoria = 2

// Mi collego al database
$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

/* Creo una query che trovi titolo e nome dell'autore della barzelletta: per farlo devo esplicitare un collegamento tra le tabelle barzellette e autoriBarzellette con il comando JOIN */
$sql = "SELECT barzellette.id, barzellette.titolo, barzellette.autore, autoriBarzellette.nome FROM barzellette JOIN autoriBarzellette ON barzellette.autore = autoriBarzellette.id WHERE barzellette.categoria = '" . $categoria . "' ORDER BY barzellette.titolo";

if($risultato = $ciccio->query($sql)) {
	while($riga = $risultato->fetch_array()) {
?>
	<p>
		<a href="barzelletta.php?id=<?php echo $riga['id']; ?>">
			<?php echo $riga['titolo']; ?>
		</a>, di <?php echo $riga['nome']; ?>
	</p>	
<?php	
	}
}
?>

<?php
include 'inc/footer.php';
?>
