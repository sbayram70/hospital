<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$ziektegegevens['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$ziektegegevens['name']?>">
		</div>
		<div>
			<label for="name">Lastname:</label>
			<input type="text" id="lastname" name="lastname" value="<?=$ziektegegevens['lastname']?>">
		</div>
		<div>
			<label for="name">Disease:</label>
	<input type="text" id="disease" name="disease" value="<?=$ziektegegevens['disease']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>