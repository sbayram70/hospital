<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$ziektegegevens['id']?>">
			<label for="name">Name:</label>
			<span><?=$ziektegegevens['name']?></span>
		</div>
		<div>
			<label for="name">Lastname:</label>
			<span><?=$ziektegegevens['lastname']?></span>
		</div>
		<div>
			<label for="name">Disease:</label>
			<span><?=$ziektegegevens['disease']?></span><br>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>