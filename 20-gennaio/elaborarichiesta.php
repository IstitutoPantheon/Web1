<?php
	
	$richiesta = $_POST['voceCercata'];
	/* 
	Se l'utente cercherà Battaglia di Lepanto avremo $richiesta="Battaglia di Lepanto", se l'utente cercherà Belen Rodriguez avremo $richiesta = "Belen Rodriguez", se l'utente cercherà Immanuel Kant avremo $richiesta = "Immanuel Kant", ecc.
	*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hai cercato <?php echo $richiesta; ?></title>
	</head>
	<body>
		<h1><?php echo $richiesta; ?></h1>
		
		
		
		
		
		
	</body>
</html>
