
		<?php

		class instructorDelegate
		{

			public function instructorDelegate()
			{

				return "";
			}
			
			function getUniversidades($validator)
			{
		
				$q = Doctrine_Query::create()->from("universidad");
				$records = $q->execute();
		
				return $records;
			}
			
			function getProfesiones($validator)
			{
		
				$q = Doctrine_Query::create()->from("profesion");
				$records = $q->execute();
		
				return $records;
			}

			//function insert($validator)
			//{
				//$entity = new instructor();
				//$entity->cedula=$validator->getVar("cedula");
				//$entity->nombre=$validator->getVar("nombre");
				//$entity->apellido=$validator->getVar("apellido");
				//$entity->fecha_nac=$validator->getVar("fecha_nac");
				//$entity->fecha_grado=$validator->getVar("fecha_grado");
				//$entity->profesion_idprofesion=$validator->getVar("profesion");
				//$entity->horas_semanas=$validator->getVar("horas_semanas");
				//$entity->sueldo=$validator->getVar("sueldo");
				//$entity->telefono=$validator->getVar("telefono");
				//$entity->direccion=$validator->getVar("direccion");
				//$entity->sexo=$validator->getVar("sexo");
				//$entity->email=$validator->getVar("email");
				//$entity->universidad_iduniversidad=$validator->getVar("universidad");
				//$entity->save();

				//return "controller.php?view=list-instructor";
			// }
			
				
	function newInstructor($validator)
	{
		$email = $validator->getVar("email");
		$cedula = $validator->getVar("cedula");
		$nombre = $validator->getVar("nombre");
		$apellido = $validator->getVar("apellido");
		$fecha_nac = $validator->getVar("fecha_nac");
		$fecha_grado = $validator->getVar("fecha_grado");
		$profesion = $validator->getVar("profesion");
		$horas_semanas = $validator->getVar("horas_semanas");
		$sueldo=$validator->getVar("sueldo");
		$telefono = $validator->getVar("telefono");
		$direccion=$validator->getVar("direccion");
		$sexo = $validator->getVar("sexo");
		$universidad_iduniversidad=$validator->getVar("universidad");
		//$universidad = $validator->getVar("universidad");
		
		
		
		$q = Doctrine_Query::create()
		    ->from('user u')
		    ->where("u.email='$email'");
		$rows = $q->execute();
		$random = rand(0,999999999);

		if(count($rows)==0)
		{
			$random = rand(0,999999999);
			$entity = new user();
			$entity->email=$email;
			$entity->status = "valid";
			$entity->password=$validator->getVar("password");
			$entity->validation_code=$random;
			$entity->save();
		
		
			$instructor = new instructor();
			$instructor->user_id = $entity->id;
			$instructor->email = $email;
			$instructor->cedula = $cedula;
			$instructor->nombre = $nombre;
			$instructor->apellido = $apellido;
			$instructor->fecha_nac = $fecha_nac;
			$instructor->fecha_grado = $fecha_grado;
			$instructor->profesion_idprofesion = $profesion;
			$instructor->horas_semanas = $horas_semanas;
			$instructor->sueldo = $sueldo;
			$instructor->telefono = $telefono;
			$instructor->sexo	 = $sexo;
			$instructor->universidad_iduniversidad = $universidad;
			
			
			$instructor->save();
		}
		else
			$validator->addError('The user "'.$email.'" already exists.');

		$idUsuario=mysql_insert_id();

		if($validator->getTotalErrors()==0)
		{
			require_once('phputils/class.phpmailer.php');

			try {
				$mail = new PHPMailer(true); //New instance, with exceptions enabled
				//$body             = file_get_contents('contents.html');
				$body = 'Hola '.$email.', Bienvenido!, su codigo de validacion es '.$random.'. Before you can log into the system you must click on the following link: '.$GLOBALS["baseURL"].'crud.php?public_action=validate&a='.$random.'&b='.$entity->id;
				$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
				//$mail->IsSMTP();                           // tell the class to use SMTP
				//$mail->SMTPAuth   = true;                  // enable SMTP authentication
				//$mail->Port       = 587;                    // set the SMTP server port
				//$mail->Host       = "smtp.gmail.com"; // SMTP server
				//$mail->Username   = "email@gmail.com";     // SMTP server username
				//$mail->Password   = "";            // SMTP server password
				//$mail->IsSendmail();  // tell the class to use Sendmail
				//$mail->AddReplyTo("email@domain.com","domain.com");
				$mail->From       = "no-reply@sicape.com";
				$mail->FromName   = "Domain.com";
				$mail->AddBCC($email);
				$mail->Subject  = "REGISTRO EN SICAPE";
				$mail->AltBody    = "Hola, has sido registrado en SICAPE";
				$mail->WordWrap   = 80; // set word wrap
				$mail->MsgHTML($body);
				$mail->IsHTML(true); // send as HTML
				$mail->Send();

				$_SESSION['user']->status='valid';
				$_SESSION['user']->nombre = $nombre;
				$_SESSION['user']->apellido = $apellido;
				$_SESSION['user']->email = $email;
				$_SESSION['user']->id = $entity->id;

			} catch (phpmailerException $e) {
				//$validator->addError("PHPMailer:".$e->errorMessage());
			}

		}

		return $GLOBALS['baseURL'].'gestionarInst';
	}

			function update($validator)
			{
				$id = $validator->getVar("id");
				$record = Doctrine::getTable("instructor")->find($id);
    	    	$record->cedula=$validator->getVar("cedula");
			    $record->nombre=$validator->getVar("nombre");
			    $record->apellido=$validator->getVar("apellido");
			    $record->fecha_nac=$validator->getVar("fecha_nac");
			    $record->fecha_grado=$validator->getVar("fecha_grado");
			    $record->horas_semanas=$validator->getVar("horas_semanas");
			    $record->sueldo=$validator->getVar("sueldo");
			    $record->telefono=$validator->getVar("telefono");
			    $record->direccion=$validator->getVar("direccion");
			    $record->sexo=$validator->getVar("sexo");
			    $record->email=$validator->getVar("email");
				$record->profesion_idprofesion=$validator->getVar("profesion");
			    $record->universidad_iduniversidad=$validator->getVar("universidad");
		    	$record->save();

				return "gestionarInst";
			}
	
			function delete($validator)
			{
				$id = $validator->getVar("id");

				$q = Doctrine_Query::create()->delete("instructor a")->where("a.idinstructor = ".$id);
				$q->execute();

				return "void";
			}

			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("instructor");
				$records = $q->execute();

				return $records;
			}

			function getinstructor($validator)
			{
				$id = $validator->getVar("idinstructor");

				$records = Doctrine::getTable('instructor')->find($id);

				return $records;
			}
			
				function getUpdateInstructor($validator)
			{
				$q = Doctrine_Query::create()->from("instructor")->where ('idInstructor ='. $validator->getVar('id'));
				$records = $q->execute();


				return $records;
				
			}
			
			function getEmpresas($validator)
			{
		
				$q = Doctrine_Query::create()->from("empresa");
				$records = $q->execute();
		
				return $records;
			}
			

		}

		?>
		