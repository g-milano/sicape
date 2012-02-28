<h3>Procesar Datos Curso</h3>

<ul class="nav nav-pills">
  <li class="active">
    <span><a href="<?php echo $GLOBALS['baseURL']; ?>add-curso">Agregar Datos</a></span>
  </li>
 <!-- <li>
  	<span><a href="<?php echo $GLOBALS['baseURL']; ?>update-curso">Modificar Datos</a></span>
 </li>-->
 </ul>
 <br>
<section id ="content-table">
<table id="table-curso">
	<tr>
		
		
		<td>Nombre</td>
		<td>Instructor</td>
		<td>Inversi&oacute;n</td>
		<td>Cupos</td>
		<td>Programaci&oacute;n</td>
		<td></td>
		<td></td>
		
	</tr>
	
	<?php foreach ($vars['cursos'] as $curso) {
		
		$records = Doctrine::getTable('instructor')->find($curso->idInstructor);
				
		echo "<tr><td>"
			 .$curso->nombre . "</td><td>" 
			 .$curso->instructor . "</td><td>" 
			 .$curso->inversion . "</td><td>" 
			 .$curso->programacion . "</td><td>"
			 .$records['nombre'] . "</td><td>" 
			 ."<td><a href='". $GLOBALS['baseURL']."detalle-curso' >Ver</a></td>"
			 ."<td><a href='". $GLOBALS['baseURL']."update-curso' >Modificar</a></td>"  
			 ."<td><a href='". $GLOBALS['baseURL']."delete-curso' >Borrar</a></td></tr>"  ;
	} ?>
</table>
</section>