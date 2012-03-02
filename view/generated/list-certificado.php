<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="signup" />
	    <input name="action" type="hidden" value="newUser" />
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
<table id="table-certificado">
	 <tr>
		<td>Codigo Certificado</td>
		<td>Curso</td>
		<td>Participante</td>
		<td>fecha_emision</td>
		<td>ciudad</td>
		<td></td>
		<td></td>
			</tr>
	
	<?php foreach ($vars['participantes'] as $participante) {
		
					
		echo "<tr><td>"
			 .$certificado->idcertificado . "</td><td>" 
			 .$certificado->idcurso . "</td><td>" 
			 .$certificado->$participante=nombre . "</td><td>" 
			 .$certificado->fecha_emision . "</td><td>" 
			 .$certificado->ciudad . "</td><td>"
			 ."<td><a href='". $GLOBALS['baseURL']."detalle-certificad0=".$certificado->idcertificado."'>Ver</a></td>" ;
	} ?>
</table>
</section>

		