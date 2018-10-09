<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Murieta Owners Association : Search</title>
	<?php include("inc_files/css_js.php"); ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
	
	<script src="search_assets/tipuesearch/tipuesearch_content.js"></script>
	<link rel="stylesheet" href="search_assets/tipuesearch/tipuesearch.css">
	<script src="search_assets/tipuesearch/tipuesearch_set.js"></script>
	<script src="search_assets/tipuesearch/tipuesearch.min.js"></script>
  </head>
  <body>

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <?php include("inc_files/header.php"); ?> 
  
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Search</h2>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">search</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start about  -->
  <section id="about" style="min-height: 288px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Search Result</h2>
            <span class="line"></span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="about-content">
            <div class="row">			
              <div class="col-md-12">
                <div class="why-choose-us">
                  <div id="tipue_search_content"></div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about -->
  

  

  <!-- Start footer -->
  <?php include("inc_files/footer.php"); ?>
  <!-- End footer -->
   
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.js"></script>
	<!-- Slick Slider -->
	<script type="text/javascript" src="assets/js/slick.js"></script>    
	<!-- mixit slider -->
	<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
	<!-- Add fancyBox -->        
	<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
	<!-- counter -->
	<script src="assets/js/waypoints.js"></script>
	<script src="assets/js/jquery.counterup.js"></script>
	<!-- Wow animation -->
	<script type="text/javascript" src="assets/js/wow.js"></script> 
	<!-- progress bar   -->
	<script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
	
	<!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	
	<script>
	$(document).ready(function() {
		 $('#tipue_search_input').tipuesearch();
	});
	</script>

  
  </body>
</html>