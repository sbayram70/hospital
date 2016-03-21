<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "select * from gegevens";
	$result = $db->query($query);
	
	$gegevens = $result->fetch_all(MYSQLI_ASSOC);
?>