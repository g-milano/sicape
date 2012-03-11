
		<?php

		class adminDelegate
		{

			public function adminDelegate()
			{

				return "";
			}

			
			function getPersonal($validator)
			{

				$q = Doctrine_Query::create()->from("personal");
				$records = $q->execute();

				return $records;
			}
			
			function getCursos($validator)
			{

				$q = Doctrine_Query::create()->from("curso");
				$records = $q->execute();

				return $records;
			}
			
			
			function getParticipantes($validator)
			{

				$q = Doctrine_Query::create()->from("participante");
				$records = $q->execute();

				return $records;
			}
		
			function getUpdateCurso($validator)
			{
				$q = Doctrine_Query::create()->from("curso")->where ('idcurso ='. $validator->getVar('id'));
				$records = $q->execute();


				return $records;
				
			}
		
			function getCertificados($validator)
			{

				$q = Doctrine_Query::create()->from("certificado");
				$records = $q->execute();

				return $records;
			}
		
				
			function searchRecordsInstructor($validator)
			{
				$cedula = $validator->getVar('cedula');
				$q = Doctrine_Query::create()
				->from("instructor i")
				->where("i.cedula =" . $cedula);
					
				$records = $q->execute();

				
				echo json_encode($records->toArray());
				return "void";
			}
				
			function searchRecords($validator)
			{
				$cedula = $validator->getVar('cedula');
				$q = Doctrine_Query::create()
				->from("participante p")
				->where("p.cedula =" . $cedula);
					
				$records = $q->execute();

				
				
				return "detalle-participante&id=".$participante->idParticipante."";
			}

			//function getPersonal($validator)
			//{
				//$id = $validator->getVar("idpersonal");

				//$records = Doctrine::getTable('personal')->find($id);

				//return $records;
			//}

		}
		
	
		?>
		