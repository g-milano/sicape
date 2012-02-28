
		<?php

		class empresaDelegate
		{

			public function empresaDelegate()
			{

				return "";
			}

			function insert($validator)
			{
				$entity = new empresa();
		$entity->idempresa=$validator->getVar("idempresa");
		$entity->rif=$validator->getVar("rif");
		$entity->nombre=$validator->getVar("nombre");
		$entity->responsable=$validator->getVar("responsable");
		$entity->telefono=$validator->getVar("telefono");
		$entity->direccion=$validator->getVar("direccion");
				$entity->save();

				return "controller.php?view=list-empresa";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("empresa")->find($id);
    	$record->idempresa=$validator->getVar("idempresa");
    	$record->rif=$validator->getVar("rif");
    	$record->nombre=$validator->getVar("nombre");
    	$record->responsable=$validator->getVar("responsable");
    	$record->telefono=$validator->getVar("telefono");
    	$record->direccion=$validator->getVar("direccion");
		    	$record->save();

				return "controller.php?view=list-empresa&idempresa=".$validator->getVar("");
			}

			function delete($validator)
			{
				$id = $validator->getVar("");

				$q = Doctrine_Query::create()->delete("empresa a")->where("a. = ".$id);
				$q->execute();

				return "controller.php?view=list-empresa";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("empresa");
				$records = $q->execute();

				return $records;
			}

			function getempresa($validator)
			{
				$id = $validator->getVar("idempresa");

				$records = Doctrine::getTable('empresa')->find($id);

				return $records;
			}

		}

		?>
		