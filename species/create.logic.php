<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
	
		
		// Prepare data for insertion
		$namee = $db->escape_string($_POST["name"]);
		$lastname = $db->escape_string($_POST["lastname"]);
		$disease = $db->escape_string($_POST["disease"]);
		
		// Prepare query and execute
		$query = "insert into ziektegegevens (name, lastname, disease) values ('$namee','$lastname','$disease')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header ('Location: index.php');
    exit();
	endif;

?>