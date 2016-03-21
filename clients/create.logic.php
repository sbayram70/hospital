<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["naam"]);
		$email = $db->escape_string($_POST["email"]);
		$mobiel = $db->escape_string($_POST["mobiel"]);
		$geslacht = $db->escape_string($_POST["geslacht"]);
		
		// Prepare query and execute
		$query = "insert into gegevens (naam, email, mobiel, geslacht) values ('$name','$email','$mobiel','$geslacht')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header ('Location: index.php');
    exit();
	endif;

?>