<form method="POST" action="assets/elaborarichiesta.php">
	<input type="text" placeholder="Digita il contenuto da cercare" id="contenutoRicerca" name="contenutoRicerca" class="form-control" />
	<label for="cercaVideo">Cerca tra i video</label>
	<select class="form-control" id="cercaVideo" name="cercaVideo">
		<option value="si">Sì</option>
		<option value="no">No</option>
	</select>
	<input type="submit" class="btn btn-success" value="Cerca"/>
</form>
