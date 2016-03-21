<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Disease</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Lastname</th>
				<th>Disease</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($ziektegegevens as $ziektegegevens):
?>
			<tr>
				<td><?=$ziektegegevens['name']?></td>
				<td><?=$ziektegegevens['lastname']?></td>
				<td><?=$ziektegegevens['disease']?></td>
				<td class="center"><a href="edit.php?id=<?=$ziektegegevens['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$ziektegegevens['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>