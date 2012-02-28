
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<p><b>Idinstructor</b></p>
	<input type='text' name='idinstructor' value='<?php echo $vars["entity"]->idinstructor; ?>' />

<p><b>Cedula</b></p>
	<input type='text' name='cedula' value='<?php echo $vars["entity"]->cedula; ?>' />

<p><b>Nombre</b></p>
	<input type='text' name='nombre' value='<?php echo $vars["entity"]->nombre; ?>' />

<p><b>Apellido</b></p>
	<input type='text' name='apellido' value='<?php echo $vars["entity"]->apellido; ?>' />

<p><b>Fecha Nac</b></p>
	<input type='text' name='fecha_nac' value='<?php echo $vars["entity"]->fecha_nac; ?>' />

<p><b>Fecha Grado</b></p>
	<input type='text' name='fecha_grado' value='<?php echo $vars["entity"]->fecha_grado; ?>' />

<p><b>Profesion</b></p>
	<input type='text' name='profesion' value='<?php echo $vars["entity"]->profesion; ?>' />

<p><b>Egresado Universidad</b></p>
	<input type='text' name='egresado_universidad' value='<?php echo $vars["entity"]->egresado_universidad; ?>' />

<p><b>Horas Semanas</b></p>
	<input type='text' name='horas_semanas' value='<?php echo $vars["entity"]->horas_semanas; ?>' />

<p><b>Sueldo</b></p>
	<input type='text' name='sueldo' value='<?php echo $vars["entity"]->sueldo; ?>' />

<p><b>Telefono</b></p>
	<input type='text' name='telefono' value='<?php echo $vars["entity"]->telefono; ?>' />

<p><b>Direccion</b></p>
	<input type='text' name='direccion' value='<?php echo $vars["entity"]->direccion; ?>' />

<p><b>Sexo</b></p>
	<input type='text' name='sexo' value='<?php echo $vars["entity"]->sexo; ?>' />

<p><b>Email</b></p>
	<input type='text' name='email' value='<?php echo $vars["entity"]->email; ?>' />

<p><b>Universidad Iduniversidad</b></p>
	<input type='text' name='universidad_iduniversidad' value='<?php echo $vars["entity"]->universidad_iduniversidad; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>