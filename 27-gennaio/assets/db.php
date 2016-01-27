<?php
// Secondo modo di collegare un database
// In questo modo assegno i valori che mi occorrono per collegarmi a un database a delle variabili
/*$server = 'localhost';
$user = 'progetta';
$password = '';
$dbname = 'my_progetta';

$ciccio = new mysqli($server, $user, $password, $dbname);*/


// Terzo modo di collegare un database
// Assegno i valori che mi occorrono a delle costanti
define('DB_SERVER', 'localhost');
define('DB_USER', 'progetta');
define('DB_PASSWORD', '');
define('DB_NAME', 'my_progetta');
?>
