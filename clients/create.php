<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New client data</h1>
	<form method="post">
		<div>
			<label for="name">Naam:</label>
			<input type="text" id="naam" name="naam">
		</div>
		<div>
			<label for="name">Email:</label>
			<input type="text" id="email" name="email">
		</div>
		<div>
				<label for="name">Mobiel:</label>
			<input type="text" id="mobiel" name="mobiel">
		</div>
		<div>
		<label for "name"> Geslacht:</label>
		<input type="radio" name="geslacht" value="Man" /> Man
		<input type="radio" name="geslacht" value="Vrouw" /> Vrouw
		<br>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>