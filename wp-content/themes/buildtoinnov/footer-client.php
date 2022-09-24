<?php  wp_footer();
?>

<footer id="footer">



		

		<div class="footer2">

		<div class="container">

		<div class="row">

		

		<div class="col-md-4 col-sm-4 col-xs-12 panel">

		<div class="panel-body s_icon">

            

			<a href="https://web.facebook.com/Buildtoinnov8global/" target="_blank"><i class="fa fa-facebook fa-2"></i></a> 

			<a href="https://twitter.com/Buildtoinnov8uae" target="_blank"><i class="fa fa-twitter fa-2"></i></a> 			

			<a href="https://plus.google.com/+Buildtoinnov8" target="_blank"><i class="fa fa-google fa-2"></i></a>

			<a href="https://www.linkedin.com/company/Buildtoinnov8" target="_blank"><i class="fa fa-linkedin fa-2"></i></a>

			<a href="https://www.pinterest.com/Buildtoinnov8/" target="_blank"><i class="fa fa-pinterest fa-2"></i></a>

			<a href="https://www.instagram.com/Buildtoinnov8uae/" target="_blank"><i class="fa fa-instagram fa-2"></i></a>

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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function( $ ){
 jQuery(window).on('scroll', function () {
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
})
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



        });
$(window).on('scroll', function () {
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

	  <div class="col-md-12 col-sm-12 col-xs-12 text-center">

	  

	  

	   <div class="col-md-3 col-sm-3 col-xs-12 panel contact">

          <div class="nav_footer">

            <ul>

				<li> <a href="<?php echo get_site_url()?>/software-development-company-services-dubai-uae/"> Software Development  </a> </li>

				<li> <a href="<?php echo get_site_url()?>/ecommerce-development-servicess-website-design/"> Ecommerce Development  </a> </li>

				<li> <a href="<?php echo get_site_url()?>/digital-marketing-agency-dubai-uae/"> Digital Marketing  </a> </li>

				<li> <a href="<?php echo get_site_url()?>/enterprise-solutions/"> Enterprise Solutions  </a> </li>

				<li> <a href="<?php echo get_site_url()?>/portfolio/"> Portfolio </a> </li>

				<li> <a href="<?php echo get_site_url()?>/clients/"> Clients </a> </li>

				

				<li> <a target="_blank" href="https://www.Buildtoinnov8.com/blog/"> Blog </a> </li>

				<li> <a href="<?php echo get_site_url()?>/about-us/"> About Us </a> </li>

				<li> <a href="<?php echo get_site_url()?>/contact-us/"> Contact Us </a> </li>

            </ul>

          </div>

		  </div>

	  

	  

	  

	  

        <div class="col-md-2 col-sm-2 col-xs-6 panel contact">

          <h3 class="panel-title">

          Head Office

          </h3>

          <div class="panel-body">

            <ul>

				<li> London, UK</li>

				<li><i class="fa fa-phone"></i> +44 20 7572 1202</li>

				<li><i class="fa fa-envelope-o"></i> sales@Buildtoinnov8.com</li>              

            </ul>

          </div>

		  </div>

		 

		  

		<div class="col-md-2 col-sm-2 col-xs-6 panel contact">

          <h3 class="panel-title">

          U.S Office

          </h3>

          <div class="panel-body">

            <ul>

				<li> Austin, Texas, USA </li>

				<li><i class="fa fa-phone"></i> +1 770 261 0099 </li>

				<li><i class="fa fa-envelope-o"></i> sales@Buildtoinnov8.com</li>              

            </ul>

          </div>

        </div>  

		  

		  

	

		

        <div class="col-md-2 col-sm-2 col-xs-12 panel contact">

          <h3 class="panel-title">

          U.A.E Office

          </h3>

          <div class="panel-body">

            <ul>

				<li> Dubai, UAE <br>

				Level 14, Boulevard Plaza Tower 1, <br>

				Sheikh Mohammed Bin Rashid 

				Boulevard, Downtown Dubai.

				</li>

				<li><i class="fa fa-phone"></i> +971 4 556 1921 </li>

				<li><i class="fa fa-envelope-o"></i> sales@Buildtoinnov8.com</li>              

            </ul>

          </div>

		</div> 





<div class="f_map">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 panel contact">

		<div class="col-lg-12 col-md-12 col-sm-12 panel contact">		

		

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map_f1">

		<a class="office-icon office-icon--nyc" href="https://goo.gl/maps/Xe5iUAjRPZ82" target="_blank">

		<img src="<?php echo get_template_directory_uri (); ?>/assets/images/map_uk.png" alt="about-Buildtoinnov8">

		</a>

		</div>

		

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 map_f">

		<a class="office-icon office-icon--london" href="https://goo.gl/maps/h2ZyvgHXWuH2" target="_blank">

		<img src="<?php echo get_template_directory_uri (); ?>/assets/images/map_us.jpg" alt="about-Buildtoinnov8">

		</a>

		</div>



		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 map_f">

		<a class="office-icon office-icon--los-angeles" href="https://goo.gl/maps/aCx1ePSF7w52" target="_blank">

		<img src="<?php echo get_template_directory_uri (); ?>/assets/images/map_uae.jpg" alt="about-Buildtoinnov8">

		</a>

		</div>		

		</div>  

		</div> 		

</div>		





 		

		 

		</div> 

        

		

       

      

		</div>

      </div>

      <!-- /row of panels --> 

    </div>

  </div>

  <div class="footer3">

    <div class="container">

      <div class="row">

	  



        <div class="col-md-12 panel">

          <div class="panel-body">

            <p class="text-center"> Copyrights &copy; 2017.  All rights reserved </p>

          </div>

        </div>

      </div>

      <!-- /row of panels --> 

    </div>

  </div>

</footer>

		









	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->

	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/jquery.min.js"></script>

	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/bootstrap.min.js"></script>

	<!--<script src="<?php echo get_template_directory_uri (); ?>/assets/js/headroom.min.js"></script>-->

	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/jQuery.headroom.min.js"></script>

	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/custom.js"></script>	

	<script src="<?php echo get_template_directory_uri (); ?>/assets/js/widgets.js"></script>

	
 