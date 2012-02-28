
		<p><a class="agregarLink" href="controller.php?view=add-aula">Agregar un nuevo registro</a></p>
		<p>Lista de aula</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idaula</td>
		<td>nombre</td>
		<td>capacidad</td>
			</tr>
			<?php foreach($vars["listaula"] as $record) { ?>
			<tr>
				<td><?php echo $record->idaula; ?></td>
				<td><?php echo $record->nombre; ?></td>
				<td><?php echo $record->capacidad; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-aula&idaula=<?php echo $record->; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>