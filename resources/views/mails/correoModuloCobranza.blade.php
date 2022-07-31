<body>
	<h1>Terrenos y edificaciones del valle de mexico</h1>
	<table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" class="m_8109600693566022295email-container" style="width:100%"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" width="100%"><tbody><tr><td align="center"><table cellspacing="0" cellpadding="0" width="100%">
		<tbody>
			<tr>
				<td style="font-size:0px;line-height:0;padding:0px;display:none;max-height:0px;max-width:0px;opacity:0;overflow:hidden;font-family:sans-serif">
				Pago Exitoso!!</td>
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

<table width="100%" style="background:rgb(212, 212, 212);font-family:Arial,sans-serif;height:55px;max-width:100%;">
	<tr>
		<td width="5%">
			
			<br><br><br>
		</td>
		<td width="90%">
			
		</td>
		<td width="5%">
			
		</td>
	</tr>
	<tr>
		<td width="5%">
			
		</td>
		<td width="90%"  style="background:#ffffff;font-family:Arial,sans-serif;height:55px;max-width:100%;">
			<table width="100%" style="background:#ffffff;font-family:Arial,sans-serif;height:55px;max-width:100%;">
				<tr>
					<td style="width:5%;">
					</td>
					<td style="width:15%;">
						<h2 class="invoice-title">
							<center>
								<br><br>
								<b>Estado de Cuenta</b><br>
							</center>
						</h2>
					</td>
					<td style="width:60%;">

					</td>
					<td style="width:15%;">
						<div class="invoice-logo">
							<center>
								<img src="https://terrenosdelvalledemexico.ga/public/assets/LogosTerreno/logo.png" alt="logo" width="120px">
							</center>
						</div>
					</td>

					<td style="width:5%;"><br>&nbsp;
					</td>
				</tr>
				<tr>

					<td style="width:5%;">
					</td>
					<td style="width:15%;">

					</td>
					<td style="width:60%;">

					</td>
					<td style="width: 15%;">
						<div class="invoice-desc">
							<center>
								Terrenos y Edificaciones del <br>
								Valle de México<br><br>
							</center>
						</div>
					</td>

					<td style="width:5%;">
					</td>
				</tr>
				<tr>

					<td style="width:5%;">
					</td>
					<td style="width:15%;">

					</td>
					<td style="width:60%;">
						&nbsp;
					</td>
					<td style="width: 15%;">

					</td>

					<td style="width:5%;">
					</td>
				</tr>
				<tr>

					<td style="width:5%;">
					</td>
					<td style="width:15%;">
						Fecha
						<?php date_default_timezone_set("America/Mexico_City"); $fechaPHP=date('Y-m-d');?>

						<p><?php echo $fechaPHP ?></p>
					</td>
					<td style="width:60%;">
						Cliente
						<p>{{($mensaje_corrreo[0]->NombreCompleto)}}.</p>
					</td>
					<td style="width: 15%;">
						Proyecto <b>{{($mensaje_corrreo[0]->nom_proyecto)}}</b>
						<p>Mz:<b>{{($mensaje_corrreo[0]->Mz)}}</b> Lt:<b>{{($mensaje_corrreo[0]->Lt)}}</b></p>
					</td>

					<td style="width:5%;">
					</td>
				</tr>
				<tr>
					<td style="width:5%;">
					</td>
					<td style="width:15%;">

					</td>
					<td style="width:60%;">
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
					</td>
					<td style="width: 15%;">

					</td>

					<td style="width:5%;">
					</td>
				</tr>

			</table>
			<table width="100%" style="background:#ffffff;font-family:Arial,sans-serif;height:55px;max-width:100%;">
				<tr>

					<td style="width:5%;">
					</td>
					<td style="width:20%;">
						No. Contrato
						<p>{{($mensaje_corrreo[0]->id_contratos)}}</p>
						
					</td>
					<td style="width:25%;">
						
					</td>
					<td style="width: 25%;">
						
					</td>

					<td style="width: 25%;">
						Descarga tu pagare
						<a href="https://terrenosdelvalledemexico.ga/public/crea/PDF/ComprobanteCobranza/{{$mensaje_corrreo[0]->id_contratos}}/{{$mensaje_corrreo[0]->no_pago}}">
							<img src="https://riograndezac.gob.mx/informatica/wp-content/uploads/2021/07/PDFITO.png" style="width: 50px;"></a>
					</td>
				</tr>
				<tr>

					<td style="width:5%;">
					</td>
					<td style="width:20%;">
						<br><br>
					</td>
					<td style="width:25%;">
						
					</td>
					<td style="width: 25%;">
						
					</td>

					<td style="width: 25%;">
						
					</td>
				</tr>
				<tr>

					<td style="width:5%;">
					</td>
					<td style="width:20%;">
						No. Pagare
					</td>
					<td style="width:25%;">
						A pagar
					</td>
					<td style="width: 25%;">
						Pagó
					</td>

					<td style="width: 25%;">
						Saldo a favor
					</td>
				</tr>
				<?php $conta=0; ?>
				<?php $leng=count($mensaje_corrreo) - 1; ?>
				@foreach($mensaje_corrreo as $mensajecorre)
					@if(($conta % 2) == 0)

				<tr style="background:#BDBDBD ; border: 1px #BDBDBD solid;">
					<td style="width:5%; ">

					</td>
					<td style="width:20%; ">
						{{$mensajecorre->no_pago}}
					</td>
					<td style="width:25%; ">
						$ {{$mensajecorre->pago_a_cubrir}}
					</td>
					<td style="width: 25%; ">
						$ {{$mensajecorre->cantidadrecibida}}
					</td>

					<td style="width: 25%; ">
						{{$mensajecorre->masmenos}}
					</td>

				</tr>
					@else
					<tr style="background:#ffffff ; border: 1px #ffffff solid;">
					<td style="width:5%;">
					</td>
					<td style="width:20%;">
						{{$mensajecorre->no_pago}}
					</td>
					<td style="width:25%;">
						$ {{$mensajecorre->pago_a_cubrir}}
					</td>
					<td style="width: 25%;">
						$ {{$mensajecorre->cantidadrecibida}}
					</td>

					<td style="width: 25%;">
						{{$mensajecorre->masmenos}}
					</td>
				</tr>
					@endif
					
					<?php $conta++; ?>
				@endforeach
				<tr>
					
					<td style="width:5%;"><br>
					</td>
				</tr>
				<tr>
					
					<td style="width:5%;"><br>
					</td>
				</tr>
			</table>
			<table width="100%" style="background:#ffffff;font-family:Arial,sans-serif;height:55px;max-width:100%;">
				<tr>
					
					<td style="width:5%;">
					</td>
					<td style="width:20%;">

					</td>
					<td style="width:50%;">
Te invitamos a que continues con tus pagos Montserrat Vergara Mendoza.
Si deseas consultar el historial de tus pagos y descargar recibos, da click <a href="https://terrenosdelvalledemexico.ga/public/estadoDeCuentas">aqui</a> 

					</td>
					

					<td style="width: 25%;">

					</td>
				</tr>

			</table>


		</td>
		<td width="5%">
		</td>
	</tr>
	<tr>
		<td width="5%">
			
		</td>
		<td width="90%">
			
		</td>
		<td width="5%">
			
			<br><br><br>
		</td>
	</tr>
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