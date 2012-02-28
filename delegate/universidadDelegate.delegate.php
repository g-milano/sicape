
		<?php

		class universidadDelegate
		{

			public function universidadDelegate()
			{

				return "";
			}

			function insert($validator)
			{
				$entity = new universidad();
		$entity->nombre=$validator->getVar("nombre");
		$entity->siglas=$validator->getVar("siglas");
				$entity->save();

				return "controller.php?view=list-universidad";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("universidad")->find($id);
    	$record->nombre=$validator->getVar("nombre");
    	$record->siglas=$validator->getVar("siglas");
		    	$record->save();

				return "controller.php?view=list-universidad&iduniversidad=".$validator->getVar("iduniversidad");
			}

			function delete($validator)
			{
				$id = $validator->getVar("iduniversidad");

				$q = Doctrine_Query::create()->delete("universidad a")->where("a.iduniversidad = ".$id);
				$q->execute();

				return "controller.php?view=list-universidad";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("universidad");
				$records = $q->execute();

				return $records;
			}

			function getuniversidad($validator)
			{
				$id = $validator->getVar("iduniversidad");

				$records = Doctrine::getTable('universidad')->find($id);

				return $records;
			}

		}

		?>
		