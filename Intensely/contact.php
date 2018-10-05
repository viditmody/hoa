<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Murieta Owners Association : Contact Us</title>
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
              <h2>Contact Us</h2>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
              <h2 class="title">Have any Questions?</h2>
              <span class="line"></span>
            </div>
         </div>
         <div class="col-md-12">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-4">
                 <div class="contact-area-left">
                   <h4>Contact Info</h4>
                   <p>Murieta Owner's Association</p>
                   <address class="single-address">
                     <p>39821 Cedar Blvd. Newark, CA 94560</p>
                     <p><a href="mailto:murietahoa@gmail.com">murietahoa@gmail.com</a></p>
                     <p>Phone: <a href="tel:+15106838794">(510) 683-8794</a></p>
					 <p>Fax: (510) 683-8940</p>
                   </address> 
                   <div class="footer-right contact-social">
                      <a target="_blank" href="https://www.facebook.com/Murieta-Owners-Association-116503825092382"><i class="fa fa-facebook"></i></a>
                    </div>                
                 </div>
               </div>
               <div class="col-md-8">
                 <div class="contact-area-right">
                   <form action="" class="comments-form contact-form" id="contact-form">
                    <div class="form-group">                        
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">                        
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                     <div class="form-group">                        
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Comment" rows="3" id="message" name="message" class="form-control"></textarea>
                    </div>
					<div id="form-messages"></div>
                    <button type="submit" class="comment-btn">Submit Comment</button>
                  </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
  <!-- End contact section  -->

  <!-- Start google map -->
  <section id="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.4944024717397!2d-121.99755798468968!3d37.51984127980666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbf552eb4daf9%3A0x1eff7cb51b97c18!2sMurieta+Owners+Association!5e0!3m2!1sen!2sus!4v1538775999673" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- End google map -->

  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2>Subscribe Newsletter</h2>
              <form action="" class="subscrib-form">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <?php include("inc_files/footer.php"); ?>
  <!-- End footer -->

  <?php include("inc_files/js_footer.php"); ?>
  
  <script>
  	$(function() {
		// Get the form.
		var form = $('#contact-form');
		
		// Get the messages div.
	    var formMessages = $('#form-messages');
		
		// TODO: The rest of the code will go here...
		$(form).submit(function(event) {
			//get the value on submit
			var formName = $('#name').val();
			var formEmail = $('#email').val();
			var formSubject = $('#subject').val();
			var formMessage = $('#message').val();
			// Stop the browser from submitting the form.
			event.preventDefault();
			var formData = $(form).serialize();
			console.log(formData);
			$.ajax({
				type: 'POST',
				url: 'inc_files/contact_submit.php',
				data: formData
			}).done(function(response) {
				// Make sure that the formMessages div has the 'success' class.
				$(formMessages).removeClass('error');
				$(formMessages).addClass('success');
			
				// Set the message text.
				$(formMessages).html(response);
			
				// Clear the form.
				$('#name').val('');
				$('#email').val('');
				$('#subject').val('');
				$('#message').val('');
			}).fail(function(data) {
				// Make sure that the formMessages div has the 'error' class.
				$(formMessages).removeClass('success');
				$(formMessages).addClass('error');
			
				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).html(data.responseText);
				} else {
					$(formMessages).html('Oops! An error occured and your message could not be sent.');
				}
			});
			
			
		});
	});
  </script>
  
  </body>
</html>