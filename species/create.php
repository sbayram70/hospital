<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Lastname:</label>
			<input type="text" id="lastname" name="lastname">
		</div>
		<div>
				<label for="name">Disease:</label>
			<input type="text" id="disease" name="disease">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>