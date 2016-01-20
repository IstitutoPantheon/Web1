<?php

$fillo = $_GET['opzione'];

switch($fillo) {
	case 'uno':
		include 'kant.php';
	break;
	
	case 'due':
		include 'rodriguez.php';
	break;
	
	default:
		echo "Seleziona una voce";
	break;
}



?>
