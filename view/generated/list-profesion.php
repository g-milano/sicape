
		<p><a class="agregarLink" href="controller.php?view=add-profesion">Agregar un nuevo registro</a></p>
		<p>Lista de profesion</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idprofesion</td>
		<td>nombre</td>
		<td>participante_idparticipante</td>
		<td>instructor_idinstructor</td>
			</tr>
			<?php foreach($vars["listprofesion"] as $record) { ?>
			<tr>
				<td><?php echo $record->idprofesion; ?></td>
				<td><?php echo $record->nombre; ?></td>
				<td><?php echo $record->participante_idparticipante; ?></td>
				<td><?php echo $record->instructor_idinstructor; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->idprofesion; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-profesion&idprofesion=<?php echo $record->idprofesion; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>