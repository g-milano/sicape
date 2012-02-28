
		<?php

		class profesionDelegate
		{

			public function profesionDelegate()
			{

				return "";
			}

			function insert($validator)
			{
				$entity = new profesion();
		$entity->nombre=$validator->getVar("nombre");
		$entity->participante_idparticipante=$validator->getVar("participante_idparticipante");
		$entity->instructor_idinstructor=$validator->getVar("instructor_idinstructor");
				$entity->save();

				return "controller.php?view=list-profesion";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("profesion")->find($id);
    	$record->nombre=$validator->getVar("nombre");
    	$record->participante_idparticipante=$validator->getVar("participante_idparticipante");
    	$record->instructor_idinstructor=$validator->getVar("instructor_idinstructor");
		    	$record->save();

				return "controller.php?view=list-profesion&idprofesion=".$validator->getVar("idprofesion");
			}

			function delete($validator)
			{
				$id = $validator->getVar("idprofesion");

				$q = Doctrine_Query::create()->delete("profesion a")->where("a.idprofesion = ".$id);
				$q->execute();

				return "controller.php?view=list-profesion";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("profesion");
				$records = $q->execute();

				return $records;
			}

			function getprofesion($validator)
			{
				$id = $validator->getVar("idprofesion");

				$records = Doctrine::getTable('profesion')->find($id);

				return $records;
			}

		}

		?>
		