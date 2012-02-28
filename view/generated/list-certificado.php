
		<p><a class="agregarLink" href="controller.php?view=add-certificado">Agregar un nuevo registro</a></p>
		<p>Lista de certificado</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idcertificado</td>
		<td>fecha_emision</td>
		<td>ciudad</td>
		<td>idcurso</td>
			</tr>
			<?php foreach($vars["listcertificado"] as $record) { ?>
			<tr>
				<td><?php echo $record->idcertificado; ?></td>
				<td><?php echo $record->fecha_emision; ?></td>
				<td><?php echo $record->ciudad; ?></td>
				<td><?php echo $record->idcurso; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-certificado&idcertificado=<?php echo $record->; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>