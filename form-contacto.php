<?php

// Validacion y Envio de Formulario de Contacto
if(isset($_POST['enviarContacto']))
{
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];
	
	$enviarA = 'karenherediadg@gmail.com';//get_option('admin_email');
	
	$subject = 'Contacto de: ' . $nombre . ' ' . $apellido;

	$body .= '<html><body>
			<table style=" border-collapse:collapse; width: 100%; background-color: #f2f2f2; "><tr><td style="padding: 40px 0; ">
			<table style="border-collapse:collapse; width: 520px; background-color: #fff; " align="center">
				<tr style="background-color: #FFF; height: 75px; background-color: #583478; ">
					<td style="padding: 0 24px;">
						<img src="http://" width="auto" height="50px">
					</td>
					<td style="padding: 20px 24px; text-align: right; color: #fff; font-size: 12px; ">
						CONTACTO
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table style="width: 100%; padding: 0 24px;">
							<tr style="padding: 20px 0; height: 75px; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									NOMBRE:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$nombre.' '.$apellido. '
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									CORREO:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$correo.'
								</td>
							</tr>';

							if($mensaje != '') {
								$body .= '<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
									<td style="font-size: 12px; font-weight: 700;">
										MENSAJE:
									</td>
									<td style="font-size: 12px; ">
										'.$mensaje.'
									</td>
								</tr>';
							}

						$body .= '</table>
					</td>
				</tr>
			</table>
		</table>
	</body></html>';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: Peonia <'.$enviarA.'>' . "\r\n";
	
	wp_mail($enviarA, $subject, $body, $headers);
	
	$confirmacion .= '<html><body>
					<table style=" border-collapse:collapse; width: 100%; background-color: #f2f2f2; ">
						<tr>
							<td style="padding: 40px 0; ">
								<table style="border-collapse:collapse; width: 520px; background-color: #fff; " align="center">
									<tr style="background-color: #FFF; height: 75px; background-color: #583478; ">
										<td style="padding: 0 24px; ">
											<img src="http://localhost/assets/img/logo.png" width="auto" height="50px">
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<table style="width: 100%; padding: 0 20px;">
												<tr style="padding: 20px 0; height: 75px;">
													<td colspan="2" style=" text-align: center; font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
														Gracias por contactarnos, en breve nos comunicaremos contigo.
													</td>
												</tr>
												<tr style="padding: 20px 0; height: 75px; ">
													<td style="font-size: 12px; text-align: center;">
														ventas@peonia.mx
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>	
				</body></html>';

	wp_mail($correo, 'Peonia', $confirmacion, $headers);

	$mensajeEnviado = true;
	
} // if(isset($_POST['enviado']))

	$mensaje = ($mensajeEnviado) ? 'GRACIAS, PRONTO NOS PONDREMOS EN CONTACTO' : 'HUBO UN ERROR, INTENTE MÁS TARDE';
	echo '<div class="confirmacion">' . $mensaje . '</div> <!-- /confirmacion -->';
	
?>