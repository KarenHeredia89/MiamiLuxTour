<?php
	$destino = "karenherediadg@gmail.com";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$interest = $_POST["interest"];
	$bedrooms = $_POST["bedrooms"];
	$bathrooms = $_POST["bathrooms"];
	$a_date = $_POST["arrival_date"];
	$d_date = $_POST["departure_date"];
	$a_time = $_POST["arrival_time"];
	$d_time = $_POST["departure_time"];
	$comments = $_POST["comments"];


	$subject = 'CONTACT: ' . $name ;

	$contenido .= '<html><body>
			<table style=" border-collapse:collapse; width: 100%; background-color: #f2f2f2; "><tr><td style="padding: 40px 0; ">
			<table style="border-collapse:collapse; width: 520px; background-color: #fff; " align="center">
				<tr style="background-color: #5a2937; height: 75px; ">
					<td style="padding: 0 24px;">
						<img src="http://miamiluxtour.com/assets/img/logo.png" width="auto" height="40px">
					</td>
					<td style="padding: 20px 24px; text-align: right; color: #fff; font-size: 12px; ">
						CONTACT
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table style="width: 100%; padding: 0 24px;">
							<tr style="padding: 20px 0; height: 75px; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									NAME:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$name.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									EMAIL:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$email.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									SERVICE:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$interest.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									# OF BEDROOMS:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$bedrooms.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									# of BATHROOMS:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$bathrooms.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									ARRIVAL DATE:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$a_date.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									DEPARTURE DATE:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$d_date.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									ARRIVAL TIME:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$a_time.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2; font-weight: 700;">
									DEPARTURE TIME:
								</td>
								<td style="font-size: 12px; border-bottom: 2px solid #f2f2f2;">
									'.$d_time.'
								</td>
							</tr>
							<tr style="padding: 20px 0; height: 75px; border-bottom: 2px solid #f2f2f2; ">
								<td style="font-size: 12px; font-weight: 700;">
									COMMENTS:
								</td>
								<td style="font-size: 12px; ">
									'.$comments.'
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</table>
	</body></html>';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: Miami Lux Tour <'.$destino.'>' . "\r\n";

	mail($destino, $subject, $contenido, $headers);
	header("Location:index.html");

?>