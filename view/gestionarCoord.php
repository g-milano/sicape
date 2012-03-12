<h3>Gestionar Datos Coordinador</h3>


<ul class="nav nav-pills">
  <li class="active">
    <span><a href="<?php echo $GLOBALS['baseURL']; ?>add-coordinador">Agregar Datos</a></span>
  </li>
 </ul>
 <br>
<section id ="content-table">
<table id="table-instructores">
	<tr>
		
		
		<td>Nombre</td>
		<td>Apellido</td>
		<td>C&eacute;dula</td>
		<td>Tel&eacute;fono</td>
		<td>email</td>
		<td>Profesi&oacute;n</td>
		<!--<td>Horas</td>
		<td>Sueldo</td>-->
		<td></td>
		<td></td>
		
	</tr>
	<?php foreach ($vars['listcoordinador'] as $personal) {
		
		$records = Doctrine::getTable('profesion')->find($personal->profesion_idprofesion);

				
		echo "<tr><td>"
			 .$personal->nombre . "</td><td>" 
			 .$personal->apellido . "</td><td>" 
			 .$personal->cedula . "</td><td>" 
			 .$personal->telefono . "</td><td>" 
			 .$personal->email . "</td><td>"
			 .$records['nombre'] . "</td><td>" 
			 //.$instructor->horas_semanas . "</td><td>"
			 //.$instructor->sueldo . "</td>" 
			 ."<td><a href='". $GLOBALS['baseURL']."detalle-instructor&id=".$instructor->idInstructor."' >Ver</a></td>"  
			 ."<td><a href='". $GLOBALS['baseURL']."update-instructor&id=".$instructor->idInstructor."' >Modificar</a></td>"  
			 ."<td><a href='". $GLOBALS['baseURL']."delete-instructor&id=".$instructor->idInstructor."' >Borrar</a></td></tr>"  ;
	} ?>
</table>
</section>