<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style type="text/css">
/* tukej je za google okno dizjan */
table.gsc-search-box td {
	width: 70%;
	padding-left: 10px;
}

#text {
	float: left;
}

#opis {
	width:45%;
	padding-left: 30px; 
	text-align:justify;
	margin-bottom: -30px;
}
#znacke {
	margin-top: 3%;
	width: 45%;
	float: left;
	margin-bottom: 5%
}

#postopek {
	margin-top: -42px;
	width: 50%;
	float:right;
	padding-right:40%;
	display:block;
	z-index: 1;
	min-width: 500px;
	position: relative;
	font-weight: bold;
}
.in {
	margin-right: 20px;
	width: 20px;
}

#move {
	display: block;
	width: 80%;
	float: right;
	text-align: left;
	padding-top:1px;
}

#move2 {
	width: 50%;
}

.white {
	background-color: white;
}

.card{
	margin-bottom: 20px;
}

.card:hover{
	color: #cc0000;
}

.vsebina{
	margin-top: -50px;
	margin-bottom: -30px;
}


.onas{
	color: black;
	font-size: 19px;
	margin-left: 8px;
	margin-bottom: 5px;
	font-weight: bolder;
}

.change-color{	
	color: #000;
	font-size: 	
}

.za-ds{
	font-style: italic;
  font-weight: 100;
}



}


</style>

<?php
include 'dbh.inc.php'; 
# navigacijski meni
function showNav () {
	print_r(
		'
		<script>
		(function() {
			var cx = "004088570275756489852:m_tuee_l8zq";
			var gcse = document.createElement("script");

			gcse.type = "text/javascript";
			gcse.async = true;
			gcse.src = "https://cse.google.com/cse.js?cx=" + cx;
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(gcse, s);
			})();
			window.onload = function(){
				document.getElementById("gsc-i-id1").placeholder = "";
			};
			</script>

			<nav class="navbar navbar-expand-lg navbar-light scrolling-navbar">
			<div class="container">
			<!-- Brand -->
			<a class="navbar-item" href="index.php" >
			<img src="img/logo.png" width="150px">
			</a>
			<!-- Collapse -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Links -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left -->
			<ul class="navbar-nav mr-auto">
			<li><h1 id="banner-tekst" style="color:black; Font-weight:bold;"><pid="naslov"><span class="change-color">DIGITALNI DRŽAVLJAN<br><span class="za-ds">za digitalno Slovenijo</span></span></h1></li>
			</ul>
			<!-- Right -->
			</a>
			</li> 
			<ul class="navbar-nav nav-flex-icons">
			<li class="nav-item">
			<a href="https://www.facebook.com/Digitalslovenija/" class="nav-link" target="_blank">
			<i class="fa fa-facebook-square mr-3"></i>
			</a>
			<li class="nav-item">
			<a href="https://www.instagram.com/digitalni.drzavljan/" class="nav-link" target="_blank">
			<i class="fa fa-instagram mr-3"></i>
			</a>
			</li>
			<li class="nav-item">
			<a href="https://www.youtube.com/channel/UC_LICUebZN4bvCM8tfAPUdg" class="nav-link" target="_blank">
			<i class="fa fa-youtube mr-3"></i>
			</a>
			</li>
			</li>
			<li class="nav-item">
			<a href="oprojektu.php" class="nav-link border border-dark rounded"
			target="_blank">
			<nobr><i class="fa fa-group" aria-hidden="true"></i><span class="onas">O nas</nobr></span>
			</a>
			</li>

			<!--<li><gcse:searchbox-only resultsUrl="/results.php"></gcse:searchbox-only></li>-->
			</ul>
			</div>
			</div>
			</nav>');
}
// prikaži glavno na vsaki strani
function showHeader($conn) {
	$firstLevel = isset($_GET['id']) ? $_GET['id'] : "";
	$secondLevel = isset($_GET['idk']) ? $_GET['idk'] : "";
	$thirdLevel = isset($_GET['idt']) ? $_GET['idt'] : "";
	if ($firstLevel != "" and $secondLevel == "" and $thirdLevel == "") {
		$sql = "SELECT imePaketa FROM paketi WHERE idp='$firstLevel'";
		$result = mysqli_query($conn,$sql);
		$row = $result->fetch_array();
	}
	elseif ($secondLevel != "" and $firstLevel == "" and $thirdLevel == "") {
		$sql = "SELECT imeKategorije FROM kategorije k, paketi p WHERE idk='$secondLevel' and k.idp = p.idp";
		$result = mysqli_query($conn,$sql);
		$row = $result->fetch_array();
	}
	elseif ($firstLevel == "" and $secondLevel != "" and $thirdLevel != "") {
		$sql = "SELECT ime_tematike from tematike t, prenosi p WHERE t.idt = p.idt and t.idt = '$thirdLevel'";
		$result = mysqli_query($conn, $sql);
		$row = $result->fetch_array();
	}
	else {
		$row = ["Vstopna stran - Digitalni državljan"];
	}
	printf('
		<div class="fullscreen-bg">
		<video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">

		<source src="bgvideo1.mp4" type="video/mp4">

		</video>
		</div>
		<html xmlns="http://www.w3.org/1999/xhtml"
		xmlns:fb="http://ogp.me/ns/fb#">
		<head>
		<meta charset="utf-8">
		<meta property="og:image" content="img/logo.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>%s</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="icon" href="img/favicon.png">
		</head>', $row[0]);
} 
//  prikaži nogo na vsaki strani (posebo za prvo stran)
function showFooter() {
	print_r('
		<footer class="page-footer text-center font-small style="padding-top:200px;">

		<div class="card-body text-white text-center" style="width=100%">

		<img src="img/logo_footer.png" class="img-fluid" alt="Investitorji-Javni Štipendijski razvojni invaldiski sklad SVN">

		</div>

		<!--Copyright-->
		<div class="footer-tekst">Po kreativni poti do znanja (PKP) - 2018</div>	
		<!--/.Copyright-->

		</footer>');
}
//  prikaži drobtinice oziroma. meni, ki se dinamično gradi po številu klikov na strani
function showbreadcrumbs($conn) {
	$firstLevel = isset($_GET['id']) ? $_GET['id'] : "";
	$secondLevel = isset($_GET['idk']) ? $_GET['idk'] : "";
	$thirdLevel = isset($_GET['idt']) ? $_GET['idt'] : "";
   //  prvi prikaz
	if ($firstLevel != "" and $secondLevel == "" and $thirdLevel == "") {
		$sql = "SELECT imePaketa FROM paketi WHERE idp='$firstLevel'";
		$result = mysqli_query($conn,$sql);
		$row = $result->fetch_array();
		printf('
			<main class="mt-5 pt-5" id="zacetek">
			<div class="container vsebina">   
			<hr>
			<div class="row mb-3 wow fadeIn">

			<!--Grid column-->  
			<div class="mb-2">
			<a href="index.php">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title">Domov</h4>

			</div>
			</div> </a>  
			</div>

			<div class="mb-2">
			<a href="index.php?id='.$firstLevel.'">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title"><b>%s</b></h4>
			</div>
			</div> </a>  
			</div>   
			</div>
			</main>
			', $row["imePaketa"]);
	}
	// drugi prikaz
	elseif ($secondLevel != "" and $firstLevel == "" and $thirdLevel == "") {
		$sql = "SELECT * FROM kategorije k, paketi p WHERE idk='$secondLevel' and k.idp = p.idp";
		$result = mysqli_query($conn,$sql);
		$row = $result->fetch_array();

		printf('
			<main class="mt-5 pt-5" id="zacetek">
			<div class="container vsebina">    
			<hr>
			<div class="row mb-3 wow fadeIn">

			<!--Grid column-->  
			<div class="mb-2">
			<a href="index.php">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title">Domov</h4>
			</div>
			</div> </a>  
			</div>

			<div class="mb-2">
			<a href="index.php?id=%s">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title">%s</h4>
			</div>
			</div> </a>  
			</div>

			<div class="mb-2">
			<a href="index.php?idk=%s">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title"><b>%s</b></h4>
			</div>
			</div> </a>  
			</div>  

			</div>
			</div>
			
			</main>
			',$row["idp"], $row["imePaketa"], $row["idk"] , $row["imeKategorije"]);
	}
	// zadnji prikaz
	elseif ($firstLevel == "" and $secondLevel != "" and $thirdLevel != "") {
		$sql = "SELECT ime_tematike from tematike t, prenosi p WHERE t.idt = p.idt and t.idt = '$thirdLevel'";
		$result = mysqli_query($conn, $sql);
		$row = $result->fetch_array();

		$sql2 = "SELECT * FROM kategorije k, paketi p WHERE idk='$secondLevel' and k.idp = p.idp";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = $result2->fetch_array();

		printf('
			<main class="mt-5 pt-5" id="zacetek">
			<div class="container vsebina">   
			<hr>
			<div class="row mb-3 wow fadeIn">

			<!--Grid column-->  
			<div class="mb-2">
			<a href="index.php">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title">Domov</h4>
			</div>
			</div> </a>  
			</div>

			<div class="mb-2">
			<a href="index.php?id=%s">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title">%s</h4>
			</div>
			</div> </a>  
			</div>

			<div class="mb-2">
			<a href="index.php?idk=%s">
			<div class="card">
			<div class="card-body">
			<h4 class="card-title"><b>%s</b></h4>
			</div>
			</div> </a>  
			</div>

			<div class="mb-2">
			<a>
			<div class="card">
			<div class="card-body">
			<h4 class="card-title"><b>%s</b></h4>
			</div>
			</div> </a>  
			</div>      
			</div>
			</div>
			</main>
			',$row2["idp"], $row2["imePaketa"], $row2["idk"], $row2["imeKategorije"], $row["ime_tematike"]);
	}
}
// osnovni prikaz glavne strani
function mainpageview($conn) {
	$sql = "SELECT * FROM paketi";
	$result = mysqli_query($conn,$sql);

	printf('
		<div class="fullscreen-bg">
		<video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">

		<source src="bgvideo1.mp4" type="video/mp4">

		</video>
		</div>
		<!--Main layout-->
		<main class="mt-5 pt-5" >
		<div class="container vsebina">
		<section class="text-center">
		<div class="row mb-3 wow fadeIn">');
	while($row = $result->fetch_array())
	{
		$rows[] = $row;
	}

	for ($i=0; $i < count($rows); $i= $i+2) {
		if (count($rows) % 2 == 1 and $i == count($rows) -1) {
			if ($rows[$i]["idp"] == 7) {
				printf('<!--Section: Cards-->
					
					<!--Grid row-->
					<!--<div class="row mb-3 wow fadeIn">-->
				
					<div class="col-lg-6 col-md-6">
					<!--Card--><a href="%s">
					<div class="card">
					<!--Card image-->
					<!--Card content-->
					<div class="card-body">
					<!--Title-->
					<h4 class="card-title">%s<br>%s</h4>
					<!--Text-->
					</div>
					</div> </a>
					</div>
					<!--/.Card-->',"digi.php", $rows[$i]['imePaketa'], showIcon($rows[$i]['icon']));
			} else {
				
				printf('<!--Section: Cards-->
					
					<!--Grid row-->
					<!--<div class="row mb-3 wow fadeIn">-->
					
					<!--Grid column-->
					<div class="col-lg-6 col-md-6">
					<!--Card--><a href="index.php?id=%s">
					<div class="card">
					<!--Card image-->
					<!--Card content-->
					<div class="card-body">
					<!--Title-->
					<h4 class="card-title">%s<br>%s</h4>
					<!--Text-->
					</div>
					</div> </a>
					</div>
					<!--/.Card-->',$rows[$i]["idp"], $rows[$i]['imePaketa'], showIcon($rows[$i]['icon']));
			}
		}
		else {
			printf('
				<!--Section: Cards-->
			
				<!--Grid row-->
				<!--<div class="row mb-3 wow fadeIn">-->
				
				<div class="col-lg-6 col-md-6">
				<!--Card--><a href="index.php?id=%s">
				<div class="card">
				<!--Card content-->
				<div class="card-body">
				<!--Title-->
				<h4 class="card-title">%s<br>%s</h4>
				<!--Text-->
				</div>
				</div> </a>
				<!--/.Card-->
				</div>
				<!--Grid column-->
				<div class="col-lg-6 col-md-6">
				<!--Card--><a href="index.php?id=%s">
				<div class="card">
				<!--Card image-->
				<!--Card content-->
				<div class="card-body">
				<!--Title-->
				<h4 class="card-title"><nobr>%s</nobr><br>%s</h4>
				<!--Text-->
				</div>
				</div></a>
				<!--/.Card-->
				</div> 
				
				',  $rows[$i]["idp"], $rows[$i]['imePaketa'], showIcon($rows[$i]['icon']),$rows[$i+1]["idp"], $rows[$i+1]['imePaketa'], showIcon($rows[$i+1]['icon']));
		}
	}
	echo '
	</section>

	</div>

	</main>';
}
// uporaba JS knjižnic
function scripts() {
	print_r('<!-- SCRIPTS -->
		<!-- JQuery -->
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Initializations -->
		<script type="text/javascript">
// Animations initialization
		new WOW().init();

		$(document).ready(function(){
// Add smooth scrolling to all links
			$("a").on("click", function(event) {

// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
// Prevent default anchor click behavior
					event.preventDefault();

// Store hash
					var hash = this.hash;

// Using jQuerys animate() method to add smooth page scroll
// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$("html, body").animate({
						scrollTop: $(hash).offset().top
						}, 800, function(){

// Add hash (#) to URL when done scrolling (default click behavior)
							window.location.hash = hash;
							});
							} // End if
							});
							});
							</script>
							');
}

// tukaj je prvih 6 glavnih prikazov na prvi strani: Mladi, Brezposelni, Upokojenci, Delovno Aktivni, Starši, Splošno
// prikaz prvega nivoja
function getTheme($conn, $idp) {
	$sql = "SELECT imeKategorije, idk, icon FROM kategorije WHERE idp='$idp'";
	$result = mysqli_query($conn,$sql);
	while($row = $result->fetch_array())
	{
		$rows[] = $row;
	}
	foreach($rows as $row)
	{
		printf('
			<div class="container">
			<div class="col-lg-12 col-md-12 mb-12">
			<!--Card-->
			<a href="index.php?idk=%s">
			<div class="card">
			<!--Card image-->
			<!--Card content-->
			<div class="card-body">
			<!--Title-->
			<h4 class="card-title"><nobr>%s </nobr>%s</h4> 
			<!--Text-->
			</div>
			</div></a>
			<!--/.Card-->
			</div>
			</div>', $row['idk'], $row['imeKategorije'], showIcon($row['icon']));
	}
}
// funkcija za prikaz ikone/slike za določeno storitve/paket/kategorijo ...
function showIcon($icon)  {	
	if (substr($icon, 0, 5) === "data:") {
		$string = '<img id="kategorija-ikona" src="%s" width="58" height="58" alt="PKP" />';
		$a = sprintf($string, $icon);
		return $a;
	}
	else {
		$string = '<i class="%s" aria-hidden="false"></i>';
		$a = sprintf($string, $icon);
		return $a;
	}
}
// prikaz drugega nivoja
function showSecondLevel($conn, $idk) {
	$sql = "SELECT t.idt as 'tematika', p.idk as 'katogorija', ime_tematike, icon  FROM tematike t, prenosi p WHERE t.idt = p.idt and p.idk = '$idk'";
	$result = mysqli_query($conn,$sql);
	while($row = $result->fetch_array())
	{
		$rows[] = $row;
	}
	foreach($rows as $row)
	{
		printf('
			<div class="container">
			<div class="col-lg-12 col-md-12 mb-12">

			<!--Card-->
			<!--Card--><a href="index.php?idt=%s&idk=%s">
			<div class="card">

			<!--Card image-->

			<!--Card content-->
			<div class="card-body">
			<!--Title-->
			<h4 class="card-title"><nobr>%s</nobr>%s</h4>

			<!--Text-->

			</div>

			</div></a>
			<!--/.Card-->
			</div>
			</div>',$row['tematika'], $row['katogorija'], $row['ime_tematike'], showIcon($row['icon']));
	}
}

//  prikaz zadnjega nivoja
function ShowLast($conn, $idt) {

	$sql = "SELECT * FROM tematike WHERE idt='$idt'";
	$result = mysqli_query($conn,$sql);
	$info = $result->fetch_array(MYSQLI_ASSOC);
	
	echo "<div style='background-color:white; padding-left: 10px;'>";
	echo "<div style='margin-bottom:40px; margin-top: 30px;'><h1>". $info['ime_tematike'] . "</h1></div>";

	$opis = $info['opis'];  
	echo "<div id='opis'>".$opis."</div><br>";
	echo "<div id='znacke'>";
	$tel = $info['tel'];
	if ($tel != '0') {
		printf("<p><span id='move2'><i class='fa fa-phone-square fa-2x mb-1 in' aria-hidden='true'></i></span><span id='move'><a href='tel:%s'> %s</a></span></p>",$tel, $tel);
	}
	$potrdilo = $info['digitalno_potrdilo'];
	if ($potrdilo == '1') {

		printf("<p><span id='move2'><i class='fa fa-certificate fa-2x mb-1 in' aria-hidden='true'></i></span><a id='move' href='https://www.sigen-ca.si/'> Potrebujete digitalno potrdilo</a></p>");
	}
	if ($info['Page-link'] != "") { 
		printf("<p><span id='move2'><i class='fa fa-info-circle fa-2x mb-1 in' aria-hidden='true'></i></span> <a id='move' href='%s'> Več informacij</a></p>", $info['Page-link']);
	}
	if ($info['info-link']){
		printf("<p><span id='move2'><i class='fa fa-play fa-2x mb-1 in' aria-hidden='true'></i></span><a  id='move'href='%s'> Začni postopek</a></p>", $info['info-link']);
	}
	echo "</div>";
	if ($info['video_link'] != "") {
		$video_link = str_replace("watch?v=", "embed/", $info['video_link']);
		$video_link = str_replace("&feature=youtu.be", "", $video_link);
		printf("
			<div id='postopek'><span id='text'>Postopek:</span><iframe width='550' height='400' src='%s'frameborder='0' allowfullscreen></iframe></div>", $video_link);
	}
}
?>