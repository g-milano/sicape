
		<p><a class="agregarLink" href="controller.php?view=add-pago">Agregar un nuevo registro</a></p>
		<p>Lista de pago</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		<td>idpago</td>
		<td>numero_pago</td>
		<td>fecha_pago</td>
		<td>idcurso</td>
		<td>monto</td>
		<td>participante_idparticipante</td>
			</tr>
			<?php foreach($vars["listpago"] as $record) { ?>
			<tr>
				<td><?php echo $record->idpago; ?></td>
				<td><?php echo $record->numero_pago; ?></td>
				<td><?php echo $record->fecha_pago; ?></td>
				<td><?php echo $record->idcurso; ?></td>
				<td><?php echo $record->monto; ?></td>
				<td><?php echo $record->participante_idparticipante; ?></td>
				<td><a class="deleteLink" href="crud.php?action=delete&id=<?php echo $record->; ?>"></a></td>
				<td><a class="editarLink" href="controller.php?view=update-pago&idpago=<?php echo $record->; ?>"></a></td>
			</tr>
			<?php } ?>
		</table>