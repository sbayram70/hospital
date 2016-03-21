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
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','hospital');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "delete from ziektegegevens where id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		  header ('Location: index.php');
		exit();
	endif;

?>