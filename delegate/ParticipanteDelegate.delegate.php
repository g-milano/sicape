
		<?php

		class ParticipanteDelegate
		{

			public function instructorDelegate()
			{

				return "";
			}

			

			function update($validator)
			{
				
				$id = $validator->getVar("id");
				$email = $validator->getVar("email");
				$cedula = $validator->getVar("cedula");
				$nombre = $validator->getVar("nombre");
				$apellido = $validator->getVar("apellido");
				$fecha_nac = $validator->getVar("fecha_nac");
				$ocupacion = $validator->getVar("ocupacion");
				$telefono = $validator->getVar("telefono");
				$sexo = $validator->getVar("sexo");
				$universidad = $validator->getVar("universidad");
				$profesion = $validator->getVar("profesion");
				$participante = Doctrine::getTable("participante")->find($id);
				$user = Doctrine::getTable("user")->find($participante->user_id);	
				
				$user->email = $email;
				
				$participante->email = $email;
				$participante->cedula = $cedula;
				$participante->nombre = $nombre;
				$participante->apellido = $apellido;
				$participante->fecha_nac = $fecha_nac;
				$participante->ocupacion = $ocupacion;
				$participante->telefono = $telefono;
				$participante->sexo	 = $sexo;
				$participante->profesion_idprofesion = $profesion;
				$participante->universidad_iduniversidad = $universidad;
				$participante->save();
				$user->save();
				
				return "gestionarParticipante";
				
				
			}

			function delete($validator)
			{
				$id = $validator->getVar("id");
				
				$q = Doctrine_Query::create()->delete("participante a")->where("a.idparticipante = ".$id);
				$q->execute();

				return "void";
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
	
			function getEmpresas($validator)
			{
		
				$q = Doctrine_Query::create()->from("empresa");
				$records = $q->execute();
		
				return $records;
			}
			
				function getUpdateParticipante($validator)
			{
				$q = Doctrine_Query::create()->from("participante")->where ('idParticipante ='. $validator->getVar('id'));
				$records = $q->execute();


				return $records;
				
			}
			
	
			function listRecords($validator)
			{

				$q = Doctrine_Query::create()->from("participante");
				$records = $q->execute();

				return $records;
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

			function getinstructor($validator)
			{
				$id = $validator->getVar("idinstructor");

				$records = Doctrine::getTable('instructor')->find($id);

				return $records;
			}

		}

	
	function newParticipante($validator)
	{
		$email = $validator->getVar("email");
		$cedula = $validator->getVar("cedula");
		$nombre = $validator->getVar("nombre");
		$apellido = $validator->getVar("apellido");
		$fecha_nac = $validator->getVar("fecha_nac");
		$ocupacion = $validator->getVar("ocupacion");
		$telefono = $validator->getVar("telefono");
		$sexo = $validator->getVar("sexo");
		$universidad = $validator->getVar("universidad");
		$profesion = $validator->getVar("profesion");
		$empresa = $validator->getVar("empresa");
		
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
		
		
			$participante = new participante();
			$participante->user_id = $entity->id;
			$participante->email = $email;
			$participante->cedula = $cedula;
			$participante->nombre = $nombre;
			$participante->apellido = $apellido;
			$participante->fecha_nac = $fecha_nac;
			$participante->ocupacion = $ocupacion;
			$participante->telefono = $telefono;
			$participante->sexo	 = $sexo;
			$participante->universidad_iduniversidad = $universidad;
			$participante->profesion_idprofesion = $profesion;
			
			$participante->save();
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

		return $GLOBALS['baseURL'].'gestionarParticipante';
	}




		?>
		