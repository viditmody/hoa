<!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="search" method="get">
          <div id="search">
          <input type="text" placeholder="Type your search keyword here and hit Enter..." name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required style="display: inline-block;">	  
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>		  
        </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    +1 (510) 683-8794
                  </div>
                </li>
				<li>
                  <div class="phone">
                    <i class="fa fa-fax"></i>
                    (510) 683-8940
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    murietahoa@gmail.com
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 hidden">
            <div class="header-login">
              <!--<a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">Login / Sign Up</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->
  
  <?php /*?><!-- Start login modal window -->
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
             <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span></label>
              <button class="btn signin-btn" type="button">SIGN IN</button>
            </div>                    
          </form>
        </div>
        <div class="modal-footer footer-box">
          <a href="#">Forgot password ?</a>
          <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>            
        </div>
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
              <button class="btn signin-btn" type="button">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End login modal window --><?php */?>

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index">Murieta</a>              
          <!-- IMG BASED LOGO  -->
           <!-- <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
		  
            <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="index"){ echo "active";} ?>"><a href="index">Home</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="events"){ echo "active";} ?>"><a href="events">Events</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="news"){ echo "active";} ?>"><a href="news">News</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="gallery"){ echo "active";} ?>"><a href="gallery">Photos</a></li>
            <li class="dropdown <?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="governing-documents" || basename($_SERVER['SCRIPT_FILENAME'], '.php')=="community-info" || basename($_SERVER['SCRIPT_FILENAME'], '.php')=="form-fee-insurance" || basename($_SERVER['SCRIPT_FILENAME'], '.php')=="city-agency-organizations" || basename($_SERVER['SCRIPT_FILENAME'], '.php')=="davis-sterling-act"){ echo "active";} ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documents & Info<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="governing-documents"){ echo "active";} ?>"><a href="governing-documents">Governing Documents</a></li>                
                <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="community-info"){ echo "active";} ?>"><a href="community-info">Community Info</a></li>
                <li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="form-fee-insurance"){ echo "active";} ?>"><a href="form-fee-insurance">Forms, Fees & Insurance</a></li>
				<li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="city-agency-organizations"){ echo "active";} ?>"><a href="city-agency-organizations">City Agencies & Orgs</a></li>        
				<li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="davis-sterling-act"){ echo "active";} ?>"><a href="davis-sterling-act">Davis Stirling Act</a></li>        
              </ul>
            </li>               
			<li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="home-services"){ echo "active";} ?>"><a href="home-services">Home Services</a></li>
			<li class="<?php if(basename($_SERVER['SCRIPT_FILENAME'], '.php')=="contact"){ echo "active";} ?>"><a href="contact">Contact Us</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>
      </div>     
    </nav>
  </section>
  <!-- END MENU -->