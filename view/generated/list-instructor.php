
		<p><a class="agregarLink" href="controller.php?view=add-instructor">Agregar un nuevo registro</a></p>
		<p>Lista de instructor</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idinstructor</td>
		<td>cedula</td>
		<td>nombre</td>
		<td>apellido</td>
		<td>fecha_nac</td>
		<td>fecha_grado</td>
		<td>profesion</td>
		<td>egresado_universidad</td>
		<td>horas_semanas</td>
		<td>sueldo</td>
		<td>telefono</td>
		<td>direccion</td>
		<td>sexo</td>
		<td>email</td>
		<td>universidad_iduniversidad</td>
			</tr>
			<?php foreach($vars["listinstructor"] as $record) { ?>
			<tr>
				<td><?php echo $record->idinstructor; ?></td>
				<td><?php echo $record->cedula; ?></td>
				<td><?php echo $record->nombre; ?></td>
				<td><?php echo $record->apellido; ?></td>
				<td><?php echo $record->fecha_nac; ?></td>
				<td><?php echo $record->fecha_grado; ?></td>
				<td><?php echo $record->profesion; ?></td>
				<td><?php echo $record->egresado_universidad; ?></td>
				<td><?php echo $record->horas_semanas; ?></td>
				<td><?php echo $record->sueldo; ?></td>
				<td><?php echo $record->telefono; ?></td>
				<td><?php echo $record->direccion; ?></td>
				<td><?php echo $record->sexo; ?></td>
				<td><?php echo $record->email; ?></td>
				<td><?php echo $record->universidad_iduniversidad; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-instructor&idinstructor=<?php echo $record->; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>