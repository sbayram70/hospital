<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$ziektegegevens = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from ziektegegevens where id=$id";
			$result = $db->query($query);
		
			$ziektegegevens = $result->fetch_assoc();		
		endif;
		if ($ziektegegevens == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$namee = $db->escape_string($_POST["name"]);
		$lastname = $db->escape_string($_POST["lastname"]);
		$disease = $db->escape_string($_POST["disease"]);
		
		// Prepare query and execute
		$query = "update ziektegegevens set name='$namee', lastname='$lastname', disease='$disease' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: index.php");
    exit();
	endif;

?>