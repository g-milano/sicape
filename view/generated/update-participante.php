<h2>Modificar Participante</h2>
	<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="update-participante" />
	    <input name="action" type="hidden" value="update" />
	    <input name="id" type="hidden" value="<?php echo $_GET['id'];?>" />
	    <fieldset>
			
			<div class="clearfix">
				<label for="cedula">Cedula: </label>
				<div class="input">
					<input class="span4" name="cedula" id="cedula" type="text" value="<?php echo $vars['participante'][0]->cedula;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="nombre">Nombre: </label>
				<div class="input">
					<input class="span4" name="nombre" id="nombre" type="text" title="nombre" value="<?php echo $vars['participante'][0]->nombre;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="apellido">Apellido: </label>
				<div class="input">
					<input class="span4" name="apellido" id="apellido" type="text" title="apellido" value="<?php echo $vars['participante'][0]->apellido;?>"/>
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="fecha_nac">Fecha de Nacimiento: </label>
				<div class="input">
					<input class="span4" name="fecha_nac" id="fecha_nac" type="text" title="fecha_nac: dd/mm/aaaa" value="<?php echo $vars['participante'][0]->fecha_nac;?>"/>
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="ocupacion">Ocupación: </label>
				<div class="input">
					<input class="span4" name="ocupacion" id="ocupacion" type="text" title="ocupacion" value="<?php echo $vars['participante'][0]->ocupacion;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="telefono">Telefono: </label>
				<div class="input">
					<input class="span4" name="telefono" id="telefono" type="text" title="telefono" value="<?php echo $vars['participante'][0]->telefono;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="sexo">Sexo: </label>
				<div class="input">
					<?php if ($vars['participante'][0]->sexo == "Masculino"){?>		
					<input CHECKED  type=radio name="sexo" id="sexo" title="masculino" value="Masculino"/>Masculino<br>
					<input type=radio name="sexo" id="sexo" title="femenino" value="Femenino"/>Femenino<br>
					<?php }else{ ?> 
					<input  type=radio name="sexo" id="sexo" title="masculino" value="Masculino"/>Masculino<br>
					<input CHECKED type=radio name="sexo" id="sexo" title="femenino" value="Femenino"/>Femenino<br>
					
					<?php } ?>
					<strong class="error" id="userError"></strong>
					
				</div>
			</div>
			
			<div class="clearfix">
				<label for="Universidad">Universidad: </label>
				<div class="input">
					<SELECT name="universidad">
						<option value="">Seleccione</option>
						<?php foreach ($vars['universidades'] as $universidad) {
						if ($universidad->iduniversidad == $vars['participante'][0]->universidad_iduniversidad){
							echo "<OPTION selected VALUE='".$universidad->iduniversidad."'>".$universidad->nombre."</OPTION>";
						}
						else {
							echo "<OPTION  VALUE='".$universidad->iduniversidad."'>".$universidad->nombre."</OPTION>";
						}	
						} ?>
				
							
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="profesion">Profesion: </label>
				<div class="input">
					<SELECT name="profesion">
						<option value="">Seleccione</option>
						<?php foreach ($vars['profesiones'] as $profesion) {
							if ($profesion->idprofesion == $vars['participante'][0]->profesion_idprofesion){
									echo "<OPTION selected VALUE='".$profesion->idprofesion."'>".$profesion->nombre."</OPTION>";
							}
							else {
								echo "<OPTION  VALUE='".$profesion->idprofesion."'>".$profesion->nombre."</OPTION>";
							}
						
						} ?>					
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="empresa">Empresa</label>
				<div class="input">
					<SELECT name="empresa">
						<OPTION VALUE=""></OPTION>
						<?php foreach ($vars['empresas'] as $empresa) {
						if ($empresa->idEmpresa == $vars['participante'][0]->profesion_idprofesion){
							echo "<OPTION selected VALUE='".$empresa->idEmpresa."'>".$empresa->nombre."</OPTION>";
						}
						else {
							echo "<OPTION  VALUE='".$empresa->idEmpresa."'>".$empresa->nombre."</OPTION>";
						}
						} ?>
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="user">Email: </label>
				<div class="input">
					<input class="span4" name="email" id="email" type="text" title="Email address" value="<?php echo $vars['participante'][0]->email;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
		
			
			<input style = "margin-left: 150px;" name="" type="submit" class="btn medium blue" value="Actualizar" />
	
	
	
			</fieldset>
			
	    
	        
	    
    </form>
</div>