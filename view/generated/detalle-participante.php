<h2>Detalle Participante</h2>

			
			
			<div>Cedula: <?php echo $vars['participante'][0]->cedula;?></div>
			<br />
			<div>Nombre: <?php echo $vars['participante'][0]->nombre;?></div>
			<br />
			<div>Apellido: <?php echo $vars['participante'][0]->apellido;?></div>
			<br />
			<div>Fecha de Nacimiento: <?php echo $vars['participante'][0]->fecha_nac;?></div>
			<br />
			<div>Ocupación: <?php echo $vars['participante'][0]->ocupacion;?></div>
			<br />
			<div>Telefono: <?php echo $vars['participante'][0]->telefono;?></div>
			<br />
			<div>Sexo: <?php echo $vars['participante'][0]->sexo;?></div>
			<br />
			<div>Email: <?php echo $vars['participante'][0]->email;?></div>
			<br />
			<div>Universidad: <?php  $record = Doctrine::getTable("universidad")->find($vars['participante'][0]->universidad_iduniversidad);
				echo
				$record['nombre'];?>
			</div>
			<br />	
			<div>Profesión: <?php $record = Doctrine::getTable("profesion")->find($vars['participante'][0]->profesion_idprofesion);
				echo
				$record['nombre'];?>
			</div>

			<br />
			<div>Empresa: <?php $record = Doctrine::getTable("empresa")->find($vars['participante'][0]->Empresa_idEmpresa);
				echo
				$record['nombre'];?>
			</div>
			<br />
			
			
		