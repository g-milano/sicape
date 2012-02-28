
		<p><a class="agregarLink" href="controller.php?view=add-empresa">Agregar un nuevo registro</a></p>
		<p>Lista de empresa</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idempresa</td>
		<td>rif</td>
		<td>nombre</td>
		<td>responsable</td>
		<td>telefono</td>
		<td>direccion</td>
			</tr>
			<?php foreach($vars["listempresa"] as $record) { ?>
			<tr>
				<td><?php echo $record->idempresa; ?></td>
				<td><?php echo $record->rif; ?></td>
				<td><?php echo $record->nombre; ?></td>
				<td><?php echo $record->responsable; ?></td>
				<td><?php echo $record->telefono; ?></td>
				<td><?php echo $record->direccion; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-empresa&idempresa=<?php echo $record->; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>