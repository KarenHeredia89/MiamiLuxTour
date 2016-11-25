<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$destino = "karenherediadg@gmail.com";
		$asunto = "Miami lUX Tour";

		$contenido = "
			Name: $_POST[name]
			Email: $_POST[email]
		";

		$headers = 'From :'.$_POST['name'];
					'Reply-To: '.$_POST['email'];
					'X-Mailer: PHP/'.phpversion();

			mail($destino, $asunto, $contenido, $headers);

			echo "Mensaje enviado";

	?>
</body>
</html>