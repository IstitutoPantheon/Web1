<?php
$ciccio; 
$ciccio = "Ciao Mondo";
$ciccio = 3;
$ciccio = true;
$ciccio = array();
$ciccio = 3 + 5;
$ciccio = "3" . "Ciao"; // valore = 3Ciao
$ciccio = $_GET['cat'];
$ciccio = $_POST['cat'];
$ciccio = htmlspecialchars($_POST['cat']); // & -> &amp;
$ciccio = new mysqli('localhost', 'ciccio', 'password', 'nome');
$ciccio->query("SELECT nome FROM autori WHERE id='5'");
$ciccio->query("INSERT INTO autori(id, nome) VALUES('8', 'Umberto Eco')");
array_merge(); // Funzione built-in
substr();
mail($aChiLaMando, $oggettoDellaMail, $corpoDellaMail, $parametriOpzionali); // restituisce un booleano
implode();

for($x = 0; $x = 10; $x++) {
	
}
if(){}elseif(){}else{}

?>
