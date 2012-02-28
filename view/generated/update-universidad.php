
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<input type='hidden' name='iduniversidad' value='<?php echo $vars["entity"]->iduniversidad; ?>' />

<p><b>Nombre</b></p>
	<input type='text' name='nombre' value='<?php echo $vars["entity"]->nombre; ?>' />

<p><b>Siglas</b></p>
	<input type='text' name='siglas' value='<?php echo $vars["entity"]->siglas; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>