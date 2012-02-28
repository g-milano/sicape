
		<?php

		class pagoDelegate
		{

			public function pagoDelegate()
			{

				return "";
			}

			function insert($validator)
			{
				$entity = new pago();
		$entity->idpago=$validator->getVar("idpago");
		$entity->numero_pago=$validator->getVar("numero_pago");
		$entity->fecha_pago=$validator->getVar("fecha_pago");
		$entity->idcurso=$validator->getVar("idcurso");
		$entity->monto=$validator->getVar("monto");
		$entity->participante_idparticipante=$validator->getVar("participante_idparticipante");
				$entity->save();

				return "controller.php?view=list-pago";
			}

			function update($validator)
			{
				$id = $validator->getVar("id");$record = Doctrine::getTable("pago")->find($id);
    	$record->idpago=$validator->getVar("idpago");
    	$record->numero_pago=$validator->getVar("numero_pago");
    	$record->fecha_pago=$validator->getVar("fecha_pago");
    	$record->idcurso=$validator->getVar("idcurso");
    	$record->monto=$validator->getVar("monto");
    	$record->participante_idparticipante=$validator->getVar("participante_idparticipante");
		    	$record->save();

				return "controller.php?view=list-pago&idpago=".$validator->getVar("");
			}

			function delete($validator)
			{
				$id = $validator->getVar("");

				$q = Doctrine_Query::create()->delete("pago a")->where("a. = ".$id);
				$q->execute();

				return "controller.php?view=list-pago";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("pago");
				$records = $q->execute();

				return $records;
			}

			function getpago($validator)
			{
				$id = $validator->getVar("idpago");

				$records = Doctrine::getTable('pago')->find($id);

				return $records;
			}

		}

		?>
		