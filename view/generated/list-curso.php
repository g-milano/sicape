
		<p><a class="agregarLink" href="controller.php?view=add-curso">Agregar un nuevo registro</a></p>
		<p>Lista de curso</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idcurso</td>
		<td>nombre</td>
		<td>idinstructor</td>
		<td>inversion</td>
		<td>contenido</td>
		<td>requisitos</td>
		<td>cupos</td>
		<td>idprogramacion</td>
		<td>status</td>
			</tr>
			<?php foreach($vars["listcurso"] as $record) { ?>
			<tr>
				<td><?php echo $record->idcurso; ?></td>
				<td><?php echo $record->nombre; ?></td>
				<td><?php echo $record->idinstructor; ?></td>
				<td><?php echo $record->inversion; ?></td>
				<td><?php echo $record->contenido; ?></td>
				<td><?php echo $record->requisitos; ?></td>
				<td><?php echo $record->cupos; ?></td>
				<td><?php echo $record->idprogramacion; ?></td>
				<td><?php echo $record->status; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-curso&idcurso=<?php echo $record->; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>