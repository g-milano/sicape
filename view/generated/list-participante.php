<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="detalle-participante" />
		<input name="action" type="hidden" value="searchRecords" />
	    <fieldset>
			
			<div class="clearfix">
				<label for="cedula">Cedula: </label>
				<div class="input">
					<input class="span4" name="cedula" id="cedula" type="text" title="cedula" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<input style = "margin-left: 150px;" name="" type="submit" class="btn medium blue" value="Buscar" />
	
	
	
			</fieldset>
			
<section id ="content-table">
<table id="table-participantes">
	<tr>
		
		
		<td>Nombre</td>
		<td>Apellido</td>
		<td>C&eacute;dula</td>
		<td>Tel&eacute;fono</td>
		<td>email</td>
		<!--<td>Profesi&oacute;n</td>-->
		<td>Universidad</td>
		<td></td>
		<td></td>
		
	</tr>
	
	<?php foreach ($vars['participantes'] as $participante) {
		
		//$records = Doctrine::getTable('profesion')->find($participante->profesion_idprofesion);

				
		echo "<tr><td>"
			.$participante->nombre . "</td><td>" 
			 .$participante->apellido . "</td><td>" 
			 .$participante->cedula . "</td><td>" 
			 .$participante->telefono . "</td><td>" 
			 .$participante->email . "</td><td>"
			 //.$records['nombre'] . "</td><td>" 
			 .$participante->universidad_iduniversidad . "</td>" 
			 ."<td><a href='". $GLOBALS['baseURL']."detalle-participante&id=".$participante->idParticipante."'>Ver</a></td>" ;
	} ?>
</table>
</section>