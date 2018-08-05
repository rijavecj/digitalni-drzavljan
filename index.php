<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


<?php 

include 'master_gen.php';
include 'dbh.inc.php'; 
showHeader();

showNav(); 
$f = isset($_GET['id']) ? $_GET['id'] : "";
$s = isset($_GET['idk']) ? $_GET['idk'] : "";
$t = isset($_GET['idt']) ? $_GET['idt'] : "";

?>

<!-- prikazuje prvi nivo oz kategorije v posemezne paketu -->
<?php if ($f != "" and $s == "" and $t == ""):  ?>

	<?php showbreadcrumbs($conn); ?>
	<!--Section: Cards-->
	<section class="text-center">
		<!--Grid row-->
		<div class="row mb-3 wow fadeIn">       

			<div class="col-lg-12 col-md-12 mb-12">

				<?php getTheme($conn, $f); ?>
			</div>

		</div>
	</section>                          
</div>
<!--Grid row-->
<?php showFooter() ?>

<!--  prikazuje drugi nivo oz. Pakete lastnega generiranja -->
<?php elseif ($s != "" and $f == "" and $t == ""):  ?>

	<?php echo showbreadcrumbs($conn); ?>
	<hr>
	<!--Section: Cards-->

	<section class="text-center">

		<!--Grid row-->
		<div class="row mb-3 wow fadeIn">       

			<div class="col-lg-12 col-md-12 mb-12">

				<?php showSecondLevel($conn, $s); ?>
			</div>

		</div>
	</section>                          
</div>
<!--Grid row-->
</div>
<?php showFooter() ?>

<!--  prikazuje zandji nivo lastnega generijranaj -->
<?php elseif ($t != "" and $f == "" and $s != ""):  ?>

	<?php echo showbreadcrumbs($conn); ?>
	<hr>
	<!--Section: Cards-->
	<section class="text-center">

		<!--Grid row-->
		<div class="row mb-3 wow fadeIn">       

			<div class="col-lg-12 col-md-12 mb-12">

				<?php ShowLast($conn, $t); ?>
			</div>

		</div>
	</section>                          
</div>
<!--Grid row-->
</div>
<?php showFooter() ?>  

<?php else: ?>

	<?php echo mainpageview()?>

	<!--/.Call to action-->
	<?php showFooter() ?>
	<!--/.Footer-->

	<?php scripts() ?>

<?php endif ?>

</body>

</html>