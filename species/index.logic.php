<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "select * from ziektegegevens";
	$result = $db->query($query);
	
	$ziektegegevens = $result->fetch_all(MYSQLI_ASSOC);
?>