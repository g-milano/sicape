
		<p><a class="agregarLink" href="controller.php?view=add-programacion">Agregar un nuevo registro</a></p>
		<p>Lista de programacion</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idprogramacion</td>
		<td>duracion</td>
		<td>fecha_inicio</td>
		<td>fecha_fin</td>
		<td>hora_inicio</td>
		<td>hora_fin</td>
		<td>aula_idaula</td>
			</tr>
			<?php foreach($vars["listprogramacion"] as $record) { ?>
			<tr>
				<td><?php echo $record->idprogramacion; ?></td>
				<td><?php echo $record->duracion; ?></td>
				<td><?php echo $record->fecha_inicio; ?></td>
				<td><?php echo $record->fecha_fin; ?></td>
				<td><?php echo $record->hora_inicio; ?></td>
				<td><?php echo $record->hora_fin; ?></td>
				<td><?php echo $record->aula_idaula; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->idprofesion; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-programacion&idprogramacion=<?php echo $record->idprofesion; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>