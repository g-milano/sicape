
		<?php

		class instructorDelegate
		{

			public function instructorDelegate()
			{

				return "";
			}
			
			function getUniversidades($validator)
			{
		
				$q = Doctrine_Query::create()->from("universidad");
				$records = $q->execute();
		
				return $records;
			}
			
			function getProfesiones($validator)
			{
		
				$q = Doctrine_Query::create()->from("profesion");
				$records = $q->execute();
		
				return $records;
			}

			function insert($validator)
			{
				$entity = new instructor();
				$entity->cedula=$validator->getVar("cedula");
				$entity->nombre=$validator->getVar("nombre");
				$entity->apellido=$validator->getVar("apellido");
				$entity->fecha_nac=$validator->getVar("fecha_nac");
				$entity->fecha_grado=$validator->getVar("fecha_grado");
				$entity->profesion_idprofesion=$validator->getVar("profesion");
				//$entity->horas_semanas=$validator->getVar("horas_semanas");
				//$entity->sueldo=$validator->getVar("sueldo");
				$entity->telefono=$validator->getVar("telefono");
				$entity->direccion=$validator->getVar("direccion");
				$entity->sexo=$validator->getVar("sexo");
				$entity->email=$validator->getVar("email");
				$entity->universidad_iduniversidad=$validator->getVar("universidad");
				$entity->save();

				return "controller.php?view=list-instructor";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("instructor")->find($id);
    	    	$record->cedula=$validator->getVar("cedula");
			    $record->nombre=$validator->getVar("nombre");
			    $record->apellido=$validator->getVar("apellido");
			    $record->fecha_nac=$validator->getVar("fecha_nac");
			    $record->fecha_grado=$validator->getVar("fecha_grado");
			    $record->profesion=$validator->getVar("profesion");
			    $record->egresado_universidad=$validator->getVar("egresado_universidad");
			    //$record->horas_semanas=$validator->getVar("horas_semanas");
			    //$record->sueldo=$validator->getVar("sueldo");
			    $record->telefono=$validator->getVar("telefono");
			    $record->direccion=$validator->getVar("direccion");
			    $record->sexo=$validator->getVar("sexo");
			    $record->email=$validator->getVar("email");
			    $record->universidad_iduniversidad=$validator->getVar("universidad_iduniversidad");
		    	$record->save();

				return "controller.php?view=list-instructor&idinstructor=".$validator->getVar("");
			}

			function delete($validator)
			{
				$id = $validator->getVar("");

				$q = Doctrine_Query::create()->delete("instructor a")->where("a. = ".$id);
				$q->execute();

				return "controller.php?view=list-instructor";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("instructor");
				$records = $q->execute();

				return $records;
			}

			function getinstructor($validator)
			{
				$id = $validator->getVar("idinstructor");

				$records = Doctrine::getTable('instructor')->find($id);

				return $records;
			}

		}

		?>
		