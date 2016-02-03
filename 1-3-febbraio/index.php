<?php 
	include 'inc/header.php';
?>
<div class="col-md-4">
	<h3>Sfoglia per categorie</h3>
	<ul>
		<?php
			$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
			
			$sql = "SELECT * FROM categorie";
			if($risultato = $ciccio->query($sql)) {
				while($riga = $risultato->fetch_array()){
					echo '<a href="categoria.php?cat=' . $riga['id'] . '"><li>' . $riga['nome'] . '</li></a>';
				}
			}
		?>
	</ul>
</div>
<?php
	include 'inc/footer.php';
?>
		
