<?php
$ciccio = new mysqli('localhost', 'root', 'password', 'my_progetta'); // Crea una nuova istanza mysqli, primo modo

$ciccio = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME); // Terzo modo di collegare il db

$ciccio->query("SELECT nome FROM autori"); // Umberto Eco, John Grisham

$ciccio->query("SELECT nome FROM autori WHERE id = '1'"); // Umberto Eco

$ciccio->query("SELECT id FROM autori WHERE nome = 'John Grisham'"); // 2

$ciccio->query("INSERT INTO autori(id, nome) VALUES (NULL, 'Stephen King')"); // Inserisce un terzo record con l'autore Stephen King

$ciccio->query("SELECT nome FROM autori"); // Umberto Eco, John Grisham, Stephen King
?>
