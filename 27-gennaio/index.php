<?php
	require 'assets/db.php'; // collegamento al database - secondo modo
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Esempio di collegamento al database</title>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<body>
<?php
// Gli altri modi di collegare un db sono in esempi.php
$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

$sql = "SELECT nome FROM autori";

if($risultato = $ciccio->query($sql)) { // Umberto Eco, John Grisham
	while($riga = $risultato->fetch_array()) { // array('Umberto Eco', 'John Grisham')
		echo $riga['nome'] . "<br>";
		
	}
}


?>
</body>
</html>
