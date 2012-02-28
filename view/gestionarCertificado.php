<h3>Gestionar Certificado</h3>

<ul class="nav nav-pills">
  <li class="active">
    <span><a href="<?php echo $GLOBALS['baseURL']; ?>add-certificado">Agregar Datos</a></span>
  </li>
 </ul>
 <br>
<section id ="content-table">
<table id="table-curso">
	<tr>
		
		
		<td>Certificado</td>
		<!--<td>Instructor</td>-->
		<td>Curso</td>
		<td>Fecha Emision</td>
		<td>Ciudad</td>
		<td></td>
		<td></td>
		
	</tr>
	
	<?php foreach ($vars['certificados'] as $certificado) {
		
		$records = Doctrine::getTable('curso')->find($curso->nombre);
				
		echo "<tr><td>"
			 .$certificado->idCertificado . "</td><td>" 
			 //.$certificado->instructor . "</td><td>" 
			 .$records['nombre'] . "</td><td>" 
			 .$certificado->fecha_emision . "</td><td>" 
			 .$certificado->ciudad . "</td><td>"
			 ."<td><a href='". $GLOBALS['baseURL']."detalle-certificado' >Ver</a></td>"
			 ."<td><a href='". $GLOBALS['baseURL']."update-certificado' >Modificar</a></td>"  
			 ."<td><a href='". $GLOBALS['baseURL']."delete-certificado' >Borrar</a></td></tr>"  ;
	} ?>
</table>
</section>