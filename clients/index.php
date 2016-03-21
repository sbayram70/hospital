<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Clients data</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Naam</th>
				<th>Email</th>
				<th>Mobiel</th>
				<th>Geslacht</th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($gegevens as $gegevens):
?>
			<tr>
				<td><?=$gegevens['naam']?></td>
				<td><?=$gegevens['email']?></td>
				<td><?=$gegevens['mobiel']?></td>
				<td><?=$gegevens['geslacht']?></td>
				<td class="center"><a href="edit.php?id=<?=$gegevens['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$gegevens['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>