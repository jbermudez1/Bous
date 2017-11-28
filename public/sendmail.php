<?php


		$nombre = $_POST['nombre'];
		$mail = $_POST['mail'];
		$tel = $_POST['tel'];
		$proyecto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

		$header = 'From: ' . $mail . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";

		$mensaje = "Este mensaje fue enviado por: " . $nombre ." \r\n";
		$mensaje .= "Su e-mail es: " . $mail . " \r\n";
		$mensaje .= "Su Telefono es: " . $tel . " \r\n";
		$mensaje .= "Asunto: " . $proyecto . " \r\n";


		$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());

		$para = 'jbermudez@proyeccione.com';
		$asunto = 'Mensaje enviado proyeccione.';

		mail($para, $asunto, utf8_decode($mensaje), $header);

		echo "<script language='JavaScript'> localStorage.setItem('msg', 'si');

		window.location = 'index.html#copy'
		</script>";

?>