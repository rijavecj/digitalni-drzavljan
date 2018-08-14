<?php 
include 'master_gen.php';
include 'dbh.inc.php';
showHeader($conn);
showNav(); 
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="jquery.scrollTo.min.js"></script>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/1.0.1/svg.min.js"></script>
	<script src="dist/flowsvg.min.js"></script>

	<style>
	a:hover {
		text-decoration:underline;
	}
	body {
		color:black;
		font-weight: bold;
	}
</style>

<title>E-uprava</title>
</head>
<body>
	<div style="margin-top:150px;">
	<div id="drawing" style="width: auto; margin-left: 42%;"></div>
	<div style="margin:300px width: 100%"></div>


	<script>
		flowSVG.draw(SVG('drawing').size(1000, 1000));
		flowSVG.config({
			interactive: false,
			showButtons: true,
			connectorLength: 80,
			scrollto: true
		});
		flowSVG.shapes(
			[
			{
				label: 'knowPolicy',
				type: 'decision',
				text: [
				'Imate uporabniški',
				'račun SI-PASS',
				'(ime in geslo)?'
				],
				yes: 'hasOAPolicy',
				no: 'checkPolicy'
			}, 
			{
				label: 'hasOAPolicy',
				type: 'decision',
				text: [
				'Bi radi ',
				'uporabljali e-',
				'storitve javne uprave',
				'preko telefona'
				],
				yes: 'CCOffered',
				no: 'canWrap'
			}, 
			{
				label: 'CCOffered',
				type: 'process',
				text: [
				'Pridobite si smsPASS'
				],
				links: [
				{
					text: 'Povezava', 
					url: 'https://e-uprava.gov.si/pomoc-kontakt/pomoc-pri-uporabi/sms-pass.html', 
					target: '_blank'
				}
				],
				next: 'canComply'
			},
			{
				label: 'canComply',
				type: 'finish',
				text: [
				'Želimo vam uspešno',
				'uporabo e-storitev'
				],
				tip: {title: 'Opozorilo',
				text:
				[
				'smsPASS vam ne',
				'omogoča, da lahko',
				'uporabljate vse storitve',
				'npr. eDavki ne podpirajo',
				'tega potrdila'
				]}
			},
			{
				label: 'canWrap',
				type: 'decision',
				text: [
				'Imate kvalificirano ',
				'digitalno potrdilo?'
				],
				yes: 'checkTimeLimits',
				no: 'doNotComply'
			}, 
			{
				label: 'doNotComply',
				type: 'process',
				text: [
				'Pridobite si',
				'digitalno potrdilo',
				],
				links: [
				{
					text: 'Povezava ', 
					url: 'https://www.sigen-ca.si/pridobitev_fizicni.php', 
					target: '_blank'
				}
				],
				next: 'checkTimeLimits'
			},       
			{
				label: 'checkGreen',
				type: 'finish',
				text: [
				'Imate uporabniški',
				'račun SI-PASS',
				'(ime in geslo)?'
				],
			}, 
			{
				label: 'checkTimeLimits',
				type: 'process',
				text: [
				'V SI-PASS se',
				'prijavite z digitalnim',
				'potrdilom in',
				'ga nato registrirajte.'
				],
				links: [
				{
					text: 'Povezava', 
					url: 'https://sicas.gov.si/IdP-RM-Front/register/start.htm', 
					target: '_blank'
				}
				],
				next: 'canComply2'
			},

			{
				label: 'canComply2',
				type: 'finish',
				text: [
				'Želimo vam uspešno',
				'uporabo e-storitev'
				]
			},
			{
				label: 'checkPolicy',
				type: 'process',
				text: [
				'Ustvarite si (registrirajte) ',
				'uporabniški račun SI-PASS '
				],
				links: [
				{
					text: 'Povezava', 
					url: 'https://sicas.gov.si/IdP-RM-Front/register/start.htm', 
					target: '_blank'
				}
				],
				next: 'hasOAPolicy'
			}
			]);
		</script>
	</body>
	<?php showFooter() ?>  
	</html>