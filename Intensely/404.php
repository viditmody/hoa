<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Murieta Owners Association : Not Found</title>
    <?php include("inc_files/css_js.php"); ?>
  </head>
  <body> 

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

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
              <h2>404 Error - Not Found</h2>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Not Found</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  <!-- Start error section  -->
  <section id="error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="errror-page-area">
            <h1 class="error-title"><span class="fa fa-bug"></span></h1>
            <div class="error-content">
              <span>Opps!</span>
              <p>We can't seem to find the page you are looking for. Try searching again.</p>		  
			  
			  <div class="subscribe-area">
				<form action="search" method="get" class="subscrib-form wow fadeInUp">
				  <input type="text" placeholder="Type your search keyword here and hit Enter..." name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required style="border:1px solid;">
				  <button class="subscribe-btn" type="submit"><i class="fa fa-search"></i></button>
				</form>
			  </div>
			  
			  Or go to <a class="error-home" href="index">Home Page</a>  
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End error section  -->

  <!-- Start footer -->
  <?php include("inc_files/footer.php"); ?>
  <!-- End footer -->

  <?php include("inc_files/js_footer.php"); ?>
    
  </body>
</html>