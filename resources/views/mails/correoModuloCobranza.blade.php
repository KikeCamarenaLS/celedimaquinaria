<body>
	<h1>Terrenos y edificaciones del valle de mexico</h1>
<table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" class="m_8109600693566022295email-container" style="width:100%"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" width="100%"><tbody><tr><td align="center"><table cellspacing="0" cellpadding="0" width="100%">
	<tbody>
		<tr>
			<td style="font-size:0px;line-height:0;padding:0px;display:none;max-height:0px;max-width:0px;opacity:0;overflow:hidden;font-family:sans-serif">
			Pago Exitoso!!</td>
		</tr>
		<tr>
			<td align="center">
				<table cellspacing="0" cellpadding="0" width="100%" align="center" style="background:rgb(212, 212, 212);font-family:Arial,sans-serif;height:55px;max-width:600px">
				<tbody><tr>
					<td class="m_8109600693566022295header-content" align="center" valign="middle" style="padding:8px 24px">
						<a class="m_8109600693566022295logo-ml" href="#" title="" target="_blank" >
							<img border="0" src="https://pps.whatsapp.net/v/t61.24694-24/286664027_577725133953732_4066039646913586400_n.jpg?ccb=11-4&oh=01_AVwQU5D1IHc2XJWI7zH6dS22mfYGnhpUZ0K0CQhwWiXASQ&oe=62F822C2" width="336" height="80" alt="Terrenos" style="display:block;max-height:100%;width:auto;border:0px" class="CToWUd">
						</a>
					</td>
					
				</tr>
			</tbody>
		</table>
	</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
	<tbody>
		<tr>
			<td height="30">
				
			</td>
		</tr>
	</tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0" width="100%" align="center" style="max-width:600px">
	<tbody>
		<tr>
			<td align="center" style="text-align:center;padding:0px 40px;font-family:'Proxima Nova',_apple_system,'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:28px;line-height:1.21;color:rgb(51,51,51);font-weight:400"> Pago exitoso !!</td>
		</tr>
		<tr>

			<td align="center" style="text-align:center;padding:0px 40px;font-family:'Proxima Nova',_apple_system,'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:1.21;color:rgb(51,51,51);font-weight:400">
			Te invitamos a que continues con tus pagos {{($mensaje_corrreo[0]->NombreCompleto)}}.<br>
			Si deseas consultar el historial de tus pagos, da click <a href="https://terrenosdelvalledemexico.ga/public/estadoDeCuentas">aqui</a> 
			
			<br>
			<table>
				<tr>
					<th  style="color:#ffffff; width: 20%; background-color: red;"><center>No. de Pago</center> </th>
															<th style="color:#ffffff; width: 20%; background-color: red;"><center>Proyecto</center> </th>
															<th style="color:#ffffff; width: 20%; background-color: red;"><center>Mz </center> </th>
															<th style="color:#ffffff; width: 20%; background-color: red;"><center>Lt </center> </th>
															<th style="color:#ffffff; width: 20%; background-color: red;"><center>A pagar</center></th>
															<th style="color:#ffffff; width: 20%; background-color: red;"><center>Pagó </center></th>
															<th style="color:#ffffff; width: 20%; background-color: red;"><center>Mov. Saldo a favor</center></th>
															<th style="color:#ffffff; width: 20%; background-color: red;"><center>Descargar</center></th>
				</tr>
				<tr>
					<th>
						{{($mensaje_corrreo[0]->no_pago)}}
					</th>
					<th>
						{{($mensaje_corrreo[0]->nom_proyecto)}}
					</th>
					<th>
						{{($mensaje_corrreo[0]->Mz)}}
					</th>
					<th>
						{{($mensaje_corrreo[0]->Lt)}}
					</th>
					<th>
						{{($mensaje_corrreo[0]->pago_a_cubrir)}}
					</th>
					<th>
						{{($mensaje_corrreo[0]->cantidadrecibida)}}
					</th>
					<th>
						{{($mensaje_corrreo[0]->masmenos)}}
					</th>
					<td>
		<a href="https://terrenosdelvalledemexico.ga/public/crea/PDF/ComprobanteCobranza/{{$mensaje_corrreo[0]->id_contratos}}/{{$mensaje_corrreo[0]->no_pago}}">
						pdf</a>
					</td>

				</tr>
			</table>
			<br>
</td>
		</tr>
	</tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
	<tbody>
		<tr>
			<td height="20">
		
</td>
</tr>
</tbody>
</table>
</body>