
		<?php

		class programacionDelegate
		{

			public function programacionDelegate()
			{

				return "";
			}

			function insert($validator)
			{
				$entity = new programacion();
		$entity->idprogramacion=$validator->getVar("idprogramacion");
		$entity->duracion=$validator->getVar("duracion");
		$entity->fecha_inicio=$validator->getVar("fecha_inicio");
		$entity->fecha_fin=$validator->getVar("fecha_fin");
		$entity->hora_inicio=$validator->getVar("hora_inicio");
		$entity->hora_fin=$validator->getVar("hora_fin");
		$entity->aula_idaula=$validator->getVar("aula_idaula");
				$entity->save();

				return "controller.php?view=list-programacion";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("programacion")->find($id);
    	$record->idprogramacion=$validator->getVar("idprogramacion");
    	$record->duracion=$validator->getVar("duracion");
    	$record->fecha_inicio=$validator->getVar("fecha_inicio");
    	$record->fecha_fin=$validator->getVar("fecha_fin");
    	$record->hora_inicio=$validator->getVar("hora_inicio");
    	$record->hora_fin=$validator->getVar("hora_fin");
    	$record->aula_idaula=$validator->getVar("aula_idaula");
		    	$record->save();

				return "controller.php?view=list-programacion&idprogramacion=".$validator->getVar("idprofesion");
			}

			function delete($validator)
			{
				$id = $validator->getVar("idprofesion");

				$q = Doctrine_Query::create()->delete("programacion a")->where("a.idprofesion = ".$id);
				$q->execute();

				return "controller.php?view=list-programacion";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("programacion");
				$records = $q->execute();

				return $records;
			}

			function getprogramacion($validator)
			{
				$id = $validator->getVar("idprogramacion");

				$records = Doctrine::getTable('programacion')->find($id);

				return $records;
			}

		}

		?>
		