<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete client data</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$gegevens['id']?>">
			<label for="name">Naam:</label>
			<span><?=$gegevens['naam']?></span>
		</div>
		<div>
			<label for="name">Email:</label>
			<span><?=$gegevens['email']?></span>
		</div>
		<div>
			<label for="name">Mobiel:</label>
			<span><?=$gegevens['mobiel']?></span>
		<div>
			<label for="name">Geslacht:</label>
			<span><?=$gegevens['geslacht']?></span><br><br>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>