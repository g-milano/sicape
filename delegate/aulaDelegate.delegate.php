
		<?php

		class aulaDelegate
		{

			public function aulaDelegate()
			{

				return "";
			}

			function insert($validator)
			{
				$entity = new aula();
		$entity->idaula=$validator->getVar("idaula");
		$entity->nombre=$validator->getVar("nombre");
		$entity->capacidad=$validator->getVar("capacidad");
				$entity->save();

				return "controller.php?view=list-aula";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("aula")->find($id);
    	$record->idaula=$validator->getVar("idaula");
    	$record->nombre=$validator->getVar("nombre");
    	$record->capacidad=$validator->getVar("capacidad");
		    	$record->save();

				return "controller.php?view=list-aula&idaula=".$validator->getVar("");
			}

			function delete($validator)
			{
				$id = $validator->getVar("");

				$q = Doctrine_Query::create()->delete("aula a")->where("a. = ".$id);
				$q->execute();

				return "controller.php?view=list-aula";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("aula");
				$records = $q->execute();

				return $records;
			}

			function getaula($validator)
			{
				$id = $validator->getVar("idaula");

				$records = Doctrine::getTable('aula')->find($id);

				return $records;
			}

		}

		?>
		