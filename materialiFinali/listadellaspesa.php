<?php

// Andare a fare la spesa

// Preparo la lista della spesa
$listaSpesa = array("Carciofi", "Prosciutto", "Mozzarella", "Pane", "Latte");

// Vai a fare la spesa solo se hai preso la lista
if($listaSpesa) {
	function vaiAlMercato($listaSpesa) {
		$distanzaDalMercato = 800;
		
		while($distanzaDalMercato > 0) {
			cammina();
		}
		
		foreach($listaSpesa as $prodotto){
			if($prodotto > 0) {
				if($prodotto > 1) {
					prendiIlPrezzoMinore();
				}
				else {
					echo "Compra!";
				}
			}
			else {
				echo "Non lo compri";
			}
		}
		
	}
}


?>
