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
	<h1 style="text-align:center; margin-top:150px">E-uprava - digitalna potrdila</h1>
	<div id="drawing" style="margin:50px auto; width:1200px; height:1200px;"></div>

	<script>
		flowSVG.draw(SVG('drawing').size(1200, 1200));
		flowSVG.config({
			interactive: true,
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
					text: 'Klik', 
					url: 'https://sicas.gov.si/IdP-RM-Front/register/start.htm', 
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
					text: 'Klik ', 
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
				'prijavite z digitalnim potrdilom',
				'in ga nato registrirajte'
				],
				links: [
				{
					text: 'Klik', 
					url: 'https://sicas.gov.si/IdP-RM-Front/register/start.htm', 
					target: '_blank'
				}
				],
				next: 'depositInWrap'
			},
			{
				label: 'depositInWrap',
				type: 'decision',
				text: [
				'Želite preveriti',
				'registrirano digitalno',
				'potrdilo?'
				],
				yes: 'registerto',
				no: 'canComply2'
			},
			{
				label: 'registerto',
				type: 'finish',
				text: [
				'Urejanje registriranih načinov',
				'prijave (Kvalificirano potrdilo',
				'izdano v Sloveniji)'
				],
				links: [
				{
					text: 'Klik', 
					url: 'https://sicas.gov.si/bl-user-web/app/id-methods', 
					target: '_blank'
				}
				]
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
					text: 'Klik', 
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