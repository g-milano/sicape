
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<p><b>Idempresa</b></p>
	<input type='text' name='idempresa' value='<?php echo $vars["entity"]->idempresa; ?>' />

<p><b>Rif</b></p>
	<input type='text' name='rif' value='<?php echo $vars["entity"]->rif; ?>' />

<p><b>Nombre</b></p>
	<input type='text' name='nombre' value='<?php echo $vars["entity"]->nombre; ?>' />

<p><b>Responsable</b></p>
	<input type='text' name='responsable' value='<?php echo $vars["entity"]->responsable; ?>' />

<p><b>Telefono</b></p>
	<input type='text' name='telefono' value='<?php echo $vars["entity"]->telefono; ?>' />

<p><b>Direccion</b></p>
	<input type='text' name='direccion' value='<?php echo $vars["entity"]->direccion; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>