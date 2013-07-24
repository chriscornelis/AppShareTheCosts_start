<?php include 'header.php'; ?>

	<div data-role="content">
			<h2>Nieuwe uitgave</h2>
			
			<select name="cost_type" id="cost_type">
			    <option value="type">Type</option>
			    <option value="Bar">Bar</option>
			    <option value="Restaurant">Restaurant</option>
			    <option value="Hotel">Hotel</option>
			    <option value="Camping">Camping</option>
			    <option value="Huur">Huur</option>
			    <option value="Auto">Auto</option>
			    <option value="OpenbaarVervoer">Openbaar Vervoer</option>
			    <option value="Vliegtuig">Vliegtuig</option>
				<option value="Taxi">Taxi</option>
				<option value="Pretpark">Pretpark</option>
			</select>
						
			<label for="price">Prijs</label> <span>&euro;</span>
			<input type="number" name="price" id="price" value="">
			
			<label for="date">Datum</label>
			<input type="date" name="date" id="date" value="">
			
			<label for="info">Toelichting</label>
			<textarea cols="40" rows="8" name="info" id="info"></textarea>
			
			<a href="#" data-role="button" id="save_cost" data-theme="b">OPSLAAN</a>
			<a href="#" data-role="button" id="delete_cost" data-theme="b">VERWIJDER</a>
		</div><!--content-->
		
	
	<?php include 'footer.php'; ?>