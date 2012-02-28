
		<p><a class="agregarLink" href="controller.php?view=add-universidad">Agregar un nuevo registro</a></p>
		<p>Lista de universidad</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>iduniversidad</td>
		<td>nombre</td>
		<td>siglas</td>
			</tr>
			<?php foreach($vars["listuniversidad"] as $record) { ?>
			<tr>
				<td><?php echo $record->iduniversidad; ?></td>
				<td><?php echo $record->nombre; ?></td>
				<td><?php echo $record->siglas; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->iduniversidad; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-universidad&iduniversidad=<?php echo $record->iduniversidad; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>