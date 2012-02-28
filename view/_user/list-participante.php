<script>
	
$(document).ready(function(){
	$("#buscar_boton").click(function(){
		
		$.ajax({
			type: "POST",
			url: "<?php echo $GLOBALS['baseURL'];?>crud.php",
			dataType: "json",
			data:"action=searchRecords&view=list-participantes&cedula="+$('#cedula').val(),
			success: function(data){
				$('#table-p').html("");
				$('#table-p').append("<td>idaula</td><td>nombre</td><td>apellido</td>");
				
				$.each(data,function(index,data){
					$('#table-p').append("<tr><td>"+data.idParticipante+"</td><td>"+data.nombre+"</td><td>"+data.apellido+"</td></tr>")
					console.log(data)
				});
				
			}
		});
	});
});

function validateForm(formDara,jqForm,options){

	return true;
}
</script>
		<span id = "standardError"></span>
		<p><a class="agregarLink" href="controller.php?view=add-aula">Agregar un nuevo registro</a></p>
		<p>Lista de Participantes</p>
		
			<input type="text" name="cedula" id="cedula" />
			
			<input name = "buscar_boton"  id = "buscar_boton" type="submit" value="Buscar" />
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" id = "table-p">
		    <tr>
		<td>idaula</td>
		<td>nombre</td>
		<td>apellido</td>
			</tr>
			<?php foreach($vars["participantes"] as $record) { ?>
			<tr>
				<td><?php echo $record->idParticipante; ?></td>
				<td><?php echo $record->nombre; ?></td>
				<td><?php echo $record->apellido; ?></td>
			</tr>
			<?php } ?>
		</table>