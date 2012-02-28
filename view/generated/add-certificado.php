<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="signup" />
	    <input name="action" type="hidden" value="newUser" />
	    <fieldset>
			
			<div class="clearfix">
				<label for="idCertificado">Codigo del Certificado: </label>
				<div class="input">
					<input class="span4" name="idCertificado" id="idCertificado" type="text" title="idCertificado" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			

			<div class="clearfix">
				<label for="fecha_emision">Fecha Emisión: </label>
				<div class="input">
					<input class="span4" name="fecha_emision" id="fecha_emision" type="text" title="fecha_emision" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
	       <div class="clearfix">
				<label for="ciudad">Ciudad: </label>
				<div class="input">
					<input class="span4" name="ciudad" id="ciudad" type="text" title="ciudad" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>


			<div>
				<label for="curso">Curso: </label>
				<div class="input">
					<SELECT name="curso">
						<option value=""></option>
						<?php foreach ($vars['cursos'] as $curso) {
						echo "<OPTION VALUE='".$curso."'>".$curso->nombre."</OPTION>";
						} ?>
					</SELECT>
				</div>
			</div>
<input type="submit" name="submit" value="Save" />
			</form>