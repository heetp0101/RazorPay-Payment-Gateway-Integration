<?php
	function sendmail($email,$body,$subject)
	{
		require_once('mailer/PHPMailer/PHPMailerAutoload.php');
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '465';
		$mail->isHTML();
		$mail->Username ='omni.soni9@gmail.com';
		$mail->Password ='ilovemom1997';
		$mail->SetFrom('omni.soni9@gmail.com');
		$mail->Subject=$subject;
		$mail->Body = $body; 
		$mail->AddAddress($email);
		if($mail->Send())
		{
			return 1;
		}
		else
		{
			return 2;
		}
	}
?>



