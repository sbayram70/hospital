<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit clients data</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$gegevens['id']?>">
			<label for="name">Naam:</label>
			<input type="text" id="name" name="naam" value="<?=$gegevens['naam']?>">
		</div>
		<div>
			<label for="name">Email:</label>
			<input type="text" id="email" name="email" value="<?=$gegevens['email']?>">
		</div>
		<div>
			<label for="name">Mobiel:</label>
	<input type="text" id="mobiel" name="mobiel" value="<?=$gegevens['mobiel']?>">
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