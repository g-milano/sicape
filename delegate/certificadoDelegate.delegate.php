
		<?php

		class certificadoDelegate
		{

			public function certificadoDelegate()
			{

				return "";
			}
			
			
			function getCursos($validator)
			{

				$q = Doctrine_Query::create()->from("curso");
				$records = $q->execute();

				return $records;
			}

			function insert($validator)
			{
				$entity = new certificado();
				$entity->idcertificado=$validator->getVar("idcertificado");
				$entity->fecha_emision=$validator->getVar("fecha_emision");
				$entity->ciudad=$validator->getVar("ciudad");
				$entity->idcurso=$validator->getVar("nombre");
				$entity->idParticipante=$validator->getVar("cedula");
				$entity->idParticipante=$validator->getVar("nombre");
				$entity->save();

				return "controller.php?view=list-certificado";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("certificado")->find($id);
		    	$record->idcertificado=$validator->getVar("idcertificado");
		    	$record->fecha_emision=$validator->getVar("fecha_emision");
		    	$record->ciudad=$validator->getVar("ciudad");
		    	$record->idcurso=$validator->getVar("idcurso");
				$record->idParticipante=$validator->getVar("cedula");
				$record->idParticipante=$validator->getVar("nombre");
		    	$record->save();

				return "controller.php?view=list-certificado&idcertificado=".$validator->getVar("");
			}

			function delete($validator)
			{
				$id = $validator->getVar("id");

				$q = Doctrine_Query::create()->delete("certificado a")->where("a. idcertificado= ".$id);
				$q->execute();

				return "controller.php?view=list-certificado";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("certificado");
				$records = $q->execute();

				return $records;
			}

			function getcertificado($validator)
			{
				$id = $validator->getVar("idcertificado");

				$records = Doctrine::getTable('certificado')->find($id);

				return $records;
			}
				function searchRecords($validator)
			{
				$cedula = $validator->getVar('idcertificado');
				$q = Doctrine_Query::create()
				->from("certificado c")
				->where("c.idcertificado =" . $idcertificado);
					
				$records = $q->execute();

				
				echo json_encode($records->toArray());
				return "void";
			}
			

		}

		?>
		