<?php  wp_footer();
?> 
<footer id="footer">

		
		<div class="footer2">
    <div class="container">
    <div class="row">
    
    <div class="col-md-4 col-sm-4 col-xs-12 panel">
    <div class="panel-body s_icon">
            
      <a href="https://web.facebook.com/joupleglobal/" target="_blank"><i class="fa fa-facebook fa-2"></i></a> 
      <a href="https://twitter.com/Joupleuae" target="_blank"><i class="fa fa-twitter fa-2"></i></a>      
      <a href="https://plus.google.com/+Jouple" target="_blank"><i class="fa fa-google fa-2"></i></a>
      <a href="https://www.linkedin.com/company/jouple" target="_blank"><i class="fa fa-linkedin fa-2"></i></a>
      <a href="https://www.pinterest.com/jouple/" target="_blank"><i class="fa fa-pinterest fa-2"></i></a>
      <a href="https://www.instagram.com/joupleuae/" target="_blank"><i class="fa fa-instagram fa-2"></i></a>
      <a href="https://www.youtube.com/channel/UC4ZvDHzlWxsD1Vs91UjKRGg" target="_blank"><i class="fa fa-youtube-play fa-2"></i></a>
      
      
          </div>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-12 panel">
      <p class="successmsg1" style="display:none;">Thank You for subscribing with us.</p>
          <p class="errormsg1" style="display:none;">Already Subscribed.</p>
    </div>
    

    <div class="col-md-5 col-sm-5 col-xs-12 panel">
    <div class="panel-body">
      <form id="subsribe-form">   
      <input class="mail_s2" id="semail" type="email" required placeholder="ENTER YOUR EMAIL">
      <button class="mes_btn" type="submit"> SUBSCRIBE </button>
          </form>
        </div>
    </div>    
    

    
    </div>
    </div>
    </div> <!--/footer2-->
     <!--/footer2-->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
            $("#subsribe-form").submit(function (event) {
              event.preventDefault();
            
             //$('#false-modal').modal('show');   
            var semail = $('#semail').val();
            
            var is_error = false;
            
            if(semail=="")
            {
              $('#semail').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#semail').removeClass('error');
            }
            
            if(is_error)
            {
              event.preventDefault();
              return;
            }

            $.ajax({
                'url': "<?php echo get_template_directory_uri (); ?>/subscriber.php",
                'type': 'POST',
                'data': {'semail': semail},
                'success': function (data) {
                    
                    if (data=='success') {
                    
                    $('.successmsg1').show();
                    $('.errormsg1').hide();
                    $('#semail').val('');
                    
                    }
                    else {
                      $('#semail').val('');
                      $('.successmsg1').hide();
                    $('.errormsg1').show();
                    }
                }
            });

        }); $(window).on('scroll', function () {
  let scrollAmount = window.scrollY;
   if(scrollAmount>200)
  {
      $('.top_bar').css('color','black');
      $('.top_bar').css('background','white');
  }
  else{
      $('.top_bar').css('color','white');
            $('.top_bar').css('background','unset');

  }
  });
</script> 



  <div class="footer1">
    <div class="container">
      <div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12 port_con">
	  <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-6 panel contact">
          <h3 class="panel-title">
          Head Office
          </h4>
          <div class="panel-body">
            <ul>
				<li> London, UK
				</li>
				<li><i class="fa fa-phone"></i> +44 20 7572 1202</li>
				<li><i class="fa fa-envelope-o"></i> sales@jouple.com</li>              
            </ul>
          </div>
		  </div>
		 
		  
		<div class="col-md-6 col-sm-6 col-xs-6 panel contact">
          <h3 class="panel-title">
          U.S Office
          </h4>
          <div class="panel-body">
            <ul>
				<li> Austin, Texas, USA</li>
				<li><i class="fa fa-phone"></i> +1 770 261 0099 </li>
				<li><i class="fa fa-envelope-o"></i> sales@jouple.com</li>              
            </ul>
          </div>
        </div>  
		  
		  
	
		
        <div class="col-md-6 col-sm-6 col-xs-12 panel contact">
          <h3 class="panel-title">
          U.A.E Office
          </h4>
          <div class="panel-body">
            <ul>
				<li> Dubai, UAE <br>
				Level 14, Boulevard Plaza Tower 1, <br>
				Sheikh Mohammed Bin Rashid 
				Boulevard, Dubai.
				</li>
				<li><i class="fa fa-phone"></i> +971 4 556 1921 </li>
				<li><i class="fa fa-envelope-o"></i> sales@jouple.com</li>              
            </ul>
          </div>
		</div>  
		
		
		 
		</div> 
        
		
        <div class="col-md-6 col-sm-12 col-xs-12">
          <h3 class="panel-title">Contact Us</h3>
          <div class="panel-body">
          	<p style="display:none;color:#fff;" class="successmsg">Your query has been received successfully, one of our representative will be in contact with you shortly.</p>
			<p style="display:none" class="errormsg">Something is missing</p>
			<form action="#" method="post" id="contact-form">
            <div class="c_field"><input class="mail_c"  name="name" id="name" type="text" placeholder="YOUR NAME"></div>
			<div class="c_field"><input class="mail_c"  name="email" type="email" placeholder="YOUR EMAIL"></div>
			<div class="c_field"><input class="mail_c"  name="phone" id="phone" type="text" placeholder="PHONE"></div>
			<div class="c_field"><textarea class="mail_c" id="msg" id="smg" rows="4" cols="50" placeholder="YOUR MESSAGE"></textarea></div>
			<button class="mes_btn2" type="submit" />Submit</button>
			</form>
          </div>
        </div>
		</div>
      </div>
      <!-- /row of panels --> 
    </div>
  </div>
  <div class="footer2">
    <div class="container">
      <div class="row">
	  
        <div class="col-md-8 panel">
          <div class="panel-body">
           <p class="simplenav"> 
<a href="/">HOME</a> | 
<a href="https://www.jouple.com/digital-marketing-agency-dubai-uae/">DIGITAL SERVICES</a> | 
<a href="https://www.jouple.com/portfolio/">PORTFOLIO</a> | 
<a href="https://www.jouple.com/blog/">BLOG</a> | 
<a href="https://www.jouple.com/about-us/">ABOUT US</a> 
<a href="https://www.jouple.com/contact-us/">CONTACT US</a> 
</p>
          </div>
        </div>
        <div class="col-md-4 panel">
          <div class="panel-body">
            <div class="hide_copy">
            <p class="text-right"> Copyrights &copy; 2017.  All rights reserved </p>
            </div>
            <div class="dis_copy">
            <p class="text-center"> Copyrights &copy; 2017.  All rights reserved </p>
          </div>
        </div>
      </div>
      <!-- /row of panels --> 
    </div>
  </div>
</footer>

	<script type="text/javascript">
            $("#contact-form").submit(function (event) {
            	event.preventDefault();
            
             //$('#false-modal').modal('show');   
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var msg = $('#msg').val();
            
            var is_error = false;
            if(name=="")
            {
              $('#name').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#name').removeClass('error');
            }
            
            if(email=="")
            {
              $('#email').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#email').removeClass('error');
            }
            if(phone=="")
            {
              $('#phone').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#phone').removeClass('error');
            }
           
            if(is_error)
            {
              event.preventDefault();
              return;
            }

            $.ajax({
                'url': "contact.php",
                'type': 'POST',
                'data': {'name': name,'email': email,'phone': phone,'msg': msg},
                'success': function (data) {
                    
                    if (data=='success') {
                    //$('.step2').addClass('acitve');
                    //$('.booknow').removeAttr("disabled");
                    
                    
                    $('.successmsg').show();
                    $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    $('#msg').val('');
                    
                    }
                    else {
                    $('.errormsg').show();
                    }
                }
            });

        });
</script>	




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/bootstrap.min.js"></script>
	<!--<script src="<?php echo get_template_directory_uri (); ?>/assets/js/headroom.min.js"></script>-->
	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/jQuery.headroom.min.js"></script>
	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/custom.js"></script>	
	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/widgets.js"></script>
	
	