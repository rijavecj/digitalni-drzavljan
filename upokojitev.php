<?php
   include 'dbh.inc.php';
  
   function getVici($conn){
     
   $sql = "SELECT * FROM tematike WHERE idt='19'";
   $result = mysqli_query($conn,$sql);
   $test = $result->fetch_array(MYSQLI_ASSOC);
   
  // $ime = $result['ime_tematike'];

   
   $opis = $test['opis'];  
   echo "<p>'".$opis."'</p>";
   
   $telefon = $test['tel'];
   if ($telefon != '0') {
    echo "<i class='fa fa-phone-square fa-2x mb-1 green-text' aria-hidden='true'></i> $telefon <br>";
  }
   $potrdilo = $test['digitalno_potrdilo'];
   if ($potrdilo == '1') {

    echo "<i class='fa fa-certificate fa-2x mb-1 red-text' aria-hidden='true'></i> Potrebujete digitalno potrdilo.<br>";
   }

   
   echo "<i class='fa fa-info-circle fa-2x mb-1 blue-text' aria-hidden='true'></i> Več info";

   }
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Upokojitev</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  

  <link rel="icon" href="img/favicon.png">

<!-- <gcse:searchbox-only></gcse:searchbox-only> -->
<style>
    a {
        color: black;
    }
</style>
</head>
  <!-- Navbar -->


  <!--Section-->
  <div class="container">   
     <hr>
     <div class="row mb-3 wow fadeIn">
     <div class="mb-2">
            <a href="index.html">
            <div class="card">

                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Domov</h4>
                    <!--Text-->
               </div>
            </div> </a>
            <!--/.Card-->
        </div>  
      <div class="mb-2">
            <a href="upokojenci.html">
            <div class="card">

                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Upokojenci</h4>
                    <!--Text-->
               </div>
            </div> </a>
            <!--/.Card-->
        </div>
        <div class="mb-2">
            <a href="upokojenci-info.html">
            <div class="card">
              <div class="card-body">
                  
                    <h4 class="card-title">Info paket</h4>
                  
                    
                </div>
               </div> </a>
        </div>
        <div class="mb-2">

            <a>
            <div class="card">
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title"><b>Upokojitev</b></h4>
                    <!--Text-->  
                </div>
            </div> </a>
        </div>
             </div>

<hr>






  <!--Section-->
   
   
  <main class="mt-5 pt-5" id="zacetek">
      <h2 class="h1 text-center mb-5">Upokojitev</h2>
    <div class="container">   
     
     <!--Section: Cards-->
     <section class="text-center">
 
        <div class="row wow fadeIn">

            <!--Grid column-->
           
            <!--Grid column-->

            <!--Grid column-->
            <div>
               
              
                    <ul><?php getVici($conn); ?>
                    </ul>
                
                    
                    
            </div>
            <!--Grid column-->

        </div>
     
        
 
     </section>
      <!--Section: Main features & Quick Start-->

    
     
         
        
   
        
  </main>

     <hr>
    </div>
    <div class="container">

        <!--Section: Jumbotron-->
        <section class="wow fadeIn" >
            <p><center>Projekt so omogočili:</center></p>
            <!-- Content -->
            <div class="card-body text-white text-center py-1 px-1 my-">

               
                <p> 
                    <img src="img/logo_footer.png" class="img-fluid" alt="">
                </p>
                
            </div>
            <!-- Content -->
        </section>
    </div>
       
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
     
      
    <!--Call to action-->

    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/Digitalslovenija/" target="_blank">
        <i class="fa fa-facebook mr-4"></i>
      </a>

      <a href="https://www.instagram.com/digitalni.drzavljan/" target="_blank">
        <i class="fa fa-instagram mr-4"></i>
      </a>

      
      <a href="https://www.youtube.com/channel/UChuqzkHhmLao0rXqClIefbw" target="_blank">
        <i class="fa fa-youtube mr-4"></i>
      </a>

     
   
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      PKP projekt @ 2018
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>

</html>