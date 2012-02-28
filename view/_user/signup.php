<div id="main-content">
	<div class="alert-message error" id="alert-message" style="display:none;">
	  <p id="standardError">Best check yo self, you’re not looking too good.</p>
	</div>
	<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="signup" />
	    <input name="action" type="hidden" value="newUser" />
	    <fieldset>
			<legend>Registro</legend>
			<div class="clearfix">
				<label for="cedula">Cedula: </label>
				<div class="input">
					<input class="span4" name="cedula" id="cedula" type="text" title="Cedula" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="nombre">Nombre: </label>
				<div class="input">
					<input class="span4" name="nombre" id="nombre" type="text" title="nombre" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="apellido">Apellido: </label>
				<div class="input">
					<input class="span4" name="apellido" id="apellido" type="text" title="apellido" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="fecha_nac">Fecha de Nacimiento: </label>
				<div class="input">
					<input class="span4" name="fecha_nac" id="fecha_nac" type="text" title="fecha_nac: dd/mm/aaaa" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="ocupacion">Ocupación: </label>
				<div class="input">
					<input class="span4" name="ocupacion" id="ocupacion" type="text" title="ocupacion" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="telefono">Telefono: </label>
				<div class="input">
					<input class="span4" name="telefono" id="telefono" type="text" title="telefono" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="sexo">Sexo: </label>
				<div class="input">
							
					<input type=radio name="sexo" id="sexo" title="masculino" value="Masculino"/>Masculino<br>
					<input type=radio name="sexo" id="sexo" title="femenino" value="Femenino"/>Femenino<br>
					<strong class="error" id="userError"></strong>
					
				</div>
			</div>
			
			<div class="clearfix">
				<label for="Universidad">Universidad: </label>
				<div class="input">
					<SELECT name="universidad">
						<option value=""></option>
						<?php foreach ($vars['universidades'] as $universidad) {
						echo "<OPTION VALUE='".$universidad->iduniversidad."'>".$universidad->nombre."</OPTION>";
						} ?>
				
						<OPTION VALUE=""></OPTION>	
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="profesion">Profesion: </label>
				<div class="input">
					<SELECT name="profesion">
						<option value=""></option>
						<?php foreach ($vars['profesiones'] as $profesion) {
						echo "<OPTION VALUE='".$profesion->idprofesion."'>".$profesion->nombre."</OPTION>";
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
						echo "<OPTION VALUE='".$empresa->idEmpresa."'>".$empresa->nombre."</OPTION>";
						} ?>
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="user">Email: </label>
				<div class="input">
					<input class="span4" name="email" id="email" type="text" title="Email address" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
		        <label>Contraseña: </label>
				<div class="input">
			        <input class="span4" name="password" id="password" type="password" />		
				</div>
		        <strong class="error" id="passwordError"></strong>
			</div>
			
			<div class="clearfix">
		        <label>Repetir Contraseña: </label>
				<div class="input">
			        <input class="span4" name="rep_password" id="rep_password" type="password" />		
				</div>
		        <strong class="error" id="passwordError"></strong>
			</div>
			
			<input style = "margin-left: 150px;" name="" type="submit" class="btn medium blue" value="Registrarse" />
	
	
	
			</fieldset>
			
	    
	        
	    
    </form>
</div>