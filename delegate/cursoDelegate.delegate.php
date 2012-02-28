
		<?php

		class cursoDelegate
		{

			public function cursoDelegate()
			{

				return "";
			}
			
				function getCursos($validator)
			{

				$q = Doctrine_Query::create()->from("curso");
				$records = $q->execute();

				return $records;
			}
			
			function getInstructores($validator)
			{

				$q = Doctrine_Query::create()->from("instructor");
				$records = $q->execute();

				return $records;
			}
			
			

			function insert($validator)
			{
				$entity = new curso();
				//$entity->idcurso=$validator->getVar("idcurso");
				$entity->nombre=$validator->getVar("nombre");
				$entity->idInstructor=$validator->getVar("nombre");
				$entity->inversion=$validator->getVar("inversion");
				$entity->contenido=$validator->getVar("contenido");
				$entity->requisitos=$validator->getVar("requisitos");
				$entity->cupos=$validator->getVar("cupos");
				$entity->idprogramacion=$validator->getVar("idprogramacion");
				$entity->status=$validator->getVar("status");
				$entity->save();

				return "controller.php?view=list-curso";
			}

			function update($validator)
			{
				//$id = $validator->getVar("id");$record = Doctrine::getTable("curso")->find($id);
		    	$record->idcurso=$validator->getVar("idcurso");
		    	$record->nombre=$validator->getVar("nombre");
		    	$record->idinstructor=$validator->getVar("instructor");
		    	$record->inversion=$validator->getVar("inversion");
		    	$record->contenido=$validator->getVar("contenido");
		    	$record->requisitos=$validator->getVar("requisitos");
		    	$record->cupos=$validator->getVar("cupos");
		    	$record->idprogramacion=$validator->getVar("idprogramacion");
		    	$record->status=$validator->getVar("status");
		    	$record->save();

				return "controller.php?view=list-curso&idcurso=".$validator->getVar("");
			}

			function delete($validator)
			{
				$id = $validator->getVar("");

				$q = Doctrine_Query::create()->delete("curso a")->where("a. = ".$id);
				$q->execute();

				return "controller.php?view=list-curso";
			}
			
			function getProgramaciones($validator)
			{
				

				$q = Doctrine_Query::create()->from("programacion");
				$records = $q->execute();

				return $records;
				
			}


			function reservarCupo($validator)
			{
				$record = Doctrine::getTable("curso")->find($validator->getVar('curso'));
				$q = Doctrine_Query::create()->from("participante")
						->where("user_id =".$_SESSION['user']->id);
				
				$records = $q->execute();
				echo $records[0]->idParticipante;
				$participante_curso	 = new participantehascurso();
				$participante_curso->Participante_idParticipante = $records[0]->idParticipante;
				$participante_curso->Curso_idCurso = $validator->getVar('curso');
				$participante_curso->status = "reservado";
				$participante_curso->save();

				
			}
			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("curso");
				$records = $q->execute();

				return $records;
			}

			function getcurso($validator)
			{
				$id = $validator->getVar("idcurso");

				$records = Doctrine::getTable('curso')->find($id);

				return $records;
			}

		}

		?>
		