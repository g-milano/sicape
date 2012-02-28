
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<p><b>Idpago</b></p>
	<input type='text' name='idpago' value='<?php echo $vars["entity"]->idpago; ?>' />

<p><b>Numero Pago</b></p>
	<input type='text' name='numero_pago' value='<?php echo $vars["entity"]->numero_pago; ?>' />

<p><b>Fecha Pago</b></p>
	<input type='text' name='fecha_pago' value='<?php echo $vars["entity"]->fecha_pago; ?>' />

<p><b>Idcurso</b></p>
	<input type='text' name='idcurso' value='<?php echo $vars["entity"]->idcurso; ?>' />

<p><b>Monto</b></p>
	<input type='text' name='monto' value='<?php echo $vars["entity"]->monto; ?>' />

<p><b>Participante Idparticipante</b></p>
	<input type='text' name='participante_idparticipante' value='<?php echo $vars["entity"]->participante_idparticipante; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>