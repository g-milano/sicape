
		<?php

		class adminDelegate
		{

			public function adminDelegate()
			{

				return "";
			}

			
			function getInstructores($validator)
			{

				$q = Doctrine_Query::create()->from("instructor");
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
		
				
			function searchRecords($validator)
			{
				$cedula = $validator->getVar('cedula');
				$q = Doctrine_Query::create()
				->from("instructor i")
				->where("i.cedula =" . $cedula);
					
				$records = $q->execute();

				
				echo json_encode($records->toArray());
				return "void";
			}

			function getinstructor($validator)
			{
				$id = $validator->getVar("idinstructor");

				$records = Doctrine::getTable('instructor')->find($id);

				return $records;
			}

		}
		
	
		?>
		