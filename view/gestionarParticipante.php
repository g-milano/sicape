<h3>Gestionar Datos Participante</h3>

<ul class="nav nav-pills">
  <li class="active">
    <span><a href="<?php echo $GLOBALS['baseURL']; ?>add-participante">Agregar Datos</a></span>
  </li>
  <!--<li>
  	<span><a href="<?php echo $GLOBALS['baseURL']; ?>update-participante">Modificar Datos</a></span>
  </li>-->
 </ul>
 <br>
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
			 ."<td><a href='". $GLOBALS['baseURL']."detalle-participante&id=".$participante->idParticipante."' >Ver</a></td>" 
			 ."<td><a href='". $GLOBALS['baseURL']."update-participante&id=".$participante->idParticipante."' >Modificar</a></td>"  
			 ."<td><a href='". $GLOBALS['baseURL']."delete-participante&id=".$participante->idParticipante."' >Borrar</a></td></tr>"  ;
	} ?>
</table>
</section>