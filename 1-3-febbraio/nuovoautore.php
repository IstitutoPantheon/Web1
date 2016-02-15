<?php
	include 'inc/header.php';
?>
	<h1>Inserisci un nuovo autore di barzellette</h1>
	<form method="post" action="assets/gestisciautore.php?azione=inserisci">
		Nome: <input type="text" name="nomeAutore"><br>
		Email: <input type="text" name="emailAutore"><br>
		Password: <input type="password" name="passwordAutore">
		<input type="submit" value="Inserisci">
	</form>
<?php
	include 'inc/footer.php';
?>
