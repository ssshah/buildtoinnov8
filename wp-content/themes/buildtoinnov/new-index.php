<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Buildtoinnov8
 * @since Buildtoinnov8 1.0
 */

get_header(); ?>

	


	
	<header id="head">
    <img src="<?php echo get_template_directory_uri (); ?>/assets/images/header_banner.jpg" alt="Buildtoinnov8 banner">   
</header>  



			

<div class="head_t">
	<h1 class="o_services">A Software Development and Digital Marketing Agency </h1>
	<p>Focusing on delivering result-driven solutions for startups, SMBs, and Enterprises </p>
	<p>Have a query, give us a call at +1 770 261 0099</p>
	<div class="letstalk"><a href="#container form_out2">Let's Talk</a></div>
	</div>


	<section class="herotxt_2">
	<div class="container">
  					
			<!-- Article content -->
			<article class="col-sm-12 col-xs-12 maincontent">
				<div class="icon-1"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/icon-1.png" alt="services"></div>
				<div class="icon-2"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/icon-2.png" alt="services"></div>
				<div class="icon-3"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/icon-3.png" alt="services"></div>
				<h1 class="o_services">Our <b>Services</b></h1>
				<img src="<?php echo get_template_directory_uri (); ?>/assets/images/row-2.png" alt="services">
				<p class="text-1">Delivering real-world digital solutions in Mobile/ Web/ Software/ Marketing </p>
				<div class="icon-4"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/icon-4.png" alt="services"></div>
				</article> 
       </div>
	
	   </section>
	   <div class="clearfix"></div>

	   
	   <!---------services-------------->
	   
	   <div class="container">
   
  <!-- slider text article start -->
  <link href="<?php echo get_template_directory_uri (); ?>/assets/css/owl.carousel.css" rel="stylesheet">
   <link href="<?php echo get_template_directory_uri (); ?>/assets/css/owl.theme.css" rel="stylesheet">
  <div class="freshdesignweb">
                <article class="grid_3  carousel-article">
                   

                    <div id="demo">
				        <div class="container">
				          <div class="row">
				            <div class="span12">
				              <div id="owl-demo" class="owl-carousel">

				                <div class="item">
				                	<div class="heading_1">
										<h1> Software <br> Development </h1>
										<img  src="<?php echo get_template_directory_uri (); ?>/assets/images/row-2.png" alt="services">
										</div>
										
										<div class="slide_p1">
										<p> 
			                              <ul>
											<li><i style="font-size:17px" class="fa">&#xf105;</i> App Development </li>
											<li><i style="font-size:17px" class="fa">&#xf105;</i> Web Development </li>
											<li><i style="font-size:17px" class="fa">&#xf105;</i> Responsive Design </li>
											<li><i style="font-size:17px" class="fa">&#xf105;</i>  UI/UX Design </li>
											<li><i style="font-size:17px" class="fa">&#xf105;</i>  Landing Pages Design </li>
											<li><i style="font-size:17px" class="fa">&#xf105;</i>  Web Maintenance & Support  </li>
											</ul>
										</p>
										</div>
									 	<a class="ex_m" href="<?php echo get_site_url()?>/software-development"> Explore More </a>					
										<img class="ser_img1" src="<?php echo get_template_directory_uri (); ?>/assets/images/software-development-2.jpg">
				                </div>
				                <div class="item">
				                	<div class="heading_2">
							<h1> Ecommerce  <br> Development </h1>
							<img src="<?php echo get_template_directory_uri (); ?>/assets/images/row-2.png" alt="services">
							</div>
							<div class="slide_p3">
							<p> 
                              <ul>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Shopify development </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Woocommerce </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Cratejoy development </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Big commerce </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i>  Open Cart </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i>  Square Space  </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i>  Magento  </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i>  Lightspeed  </li>
								</ul>
							</p>
							</div>
						 		<a class="ex_m2" href="<?php echo get_site_url()?>/ecommerce-development"> Explore More </a>					
								<img class="ser_img" src="<?php echo get_template_directory_uri (); ?>/assets/images/ecommerce-banner-2.jpg">
				                </div>
				                <div class="item">
				                	<div class="heading_1">
									<h1> Digital   <br> Marketing </h1>
									<img src="<?php echo get_template_directory_uri (); ?>/assets/images/row-2.png" alt="services">
									</div>
									
										<div class="slide_p4">
											<p> 
				                              <ul>
												<li><i style="font-size:17px" class="fa">&#xf105;</i> Search Engine Optimization </li>
												<li><i style="font-size:17px" class="fa">&#xf105;</i> Social Media Marketing (SMM) </li>
												<li><i style="font-size:17px" class="fa">&#xf105;</i> Email Marketing </li>
												<li><i style="font-size:17px" class="fa">&#xf105;</i>  SEM / Digital Advertising </li>
												<li><i style="font-size:17px" class="fa">&#xf105;</i>  Analytics & Conversion rate optimization </li>
												<li><i style="font-size:17px" class="fa">&#xf105;</i>  Content Marketing  </li>
												</ul>
									</p>
									</div>
								 	<a class="ex_m" href="<?php echo get_site_url()?>/digital-marketing"> Explore More </a>					
									<img class="ser_img1" src="<?php echo get_template_directory_uri (); ?>/assets/images/digital-marketing-2.jpg">
				                </div>
				                <div class="item">
				                	<div class="heading_2">
							<h1> Enterprise    <br> Solutions </h1>
							<img src="<?php echo get_template_directory_uri (); ?>/assets/images/row-2.png" alt="services">
							</div>
							<div class="slide_p2">
							<p> 
                              <ul>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Enterprise Mobility </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Content Management System </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Customer Relationship Management </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Cloud & SaaS </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i>  Big Data </li>
								<li><i style="font-size:17px" class="fa">&#xf105;</i> Business Intelligence  </li>
								</ul>
							</p>
							</div>
						 <a class="ex_m2" href="<?php echo get_site_url()?>/enterprise-solutions"> Explore More </a>
							<img class="ser_img" src="<?php echo get_template_directory_uri (); ?>/assets/images/enterprise-sol-2.jpg" >
				                </div>
				              </div>
				            </div>
				          </div>
				        </div>
				    </div>

                    <div class="clearfix"></div>

                    

                </article><!-- slider text article end -->

       <script src="<?php echo get_template_directory_uri (); ?>/assets/js/owl.carousel.js"></script>


    <!-- Demo -->

    
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay: false,

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });
    </script>
</div>  </div>  
<div class="clr"></div>
            <!-- freshdesignweb top bar -->

            
<script type="text/javascript">
var get_height = window.innerHeight; 
var get_height1 =  get_height - 25;
var get_container = document.getElementById('container');
get_container.style.height =  get_height1 + 'px';
</script>
	   
	  
<div class="form_o">
<div class="container form_out2" id="container form_out2">	
<div class="form_out">
    
    <div id="page2" class="hfeed site full-height2">

        <div class="page-wrap2 full-height2">
            
<div class="page--contact--wrap full-height2">
    <div class="main page--contact" role="main">
        <article id="page--contact" class="content">
            
            <div class="" id="page-contact-wrapper">
                <div class="rfp2">
    <div class="rfp__inner2">
       
        <?php include('formidea.php'); ?>
    </div>
</div>

                
                

            </div>
        </article> <!-- .content -->
    </div><!-- .main -->
</div>

        </div><!-- .page-wrap -->
    </div><!-- .site -->
    
    <script>
        var core_team_json_host = 'https://fueled.com/';
        var query_string = 1476877092;
        var cdn_url = '';
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

      
    <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion_async.js"></script>



    

    <script>
      (function(d) {
        var config = {
          kitId: 'arb8iam',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <div class="visuallyhidden">
    
<!-- Google Code for Remarketing tag -->
<script>
    /* <![CDATA[ */
    var google_conversion_id = 994583268;
    var google_conversion_label = "MUaOCPS5vwQQ5MWg2gM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" class="visuallyhidden" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/994583268/?value=0&amp;label=MUaOCPS5vwQQ5MWg2gM&amp;guid=ON&amp;script=0"/> </div>
</noscript>
<!-- Google Code for Remarketing tag ends-->

 
</div>

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', "UA-21436353-1"]);
    _gaq.push(['_setSiteSpeedSampleRate', 10]);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    function trackOutboundLink(link, category, action, label) {
        try {
          _gaq.push(['_trackEvent', category , action, label]);
        } catch(err){}

        setTimeout(function() {
            document.location.href = link;
        }, 100);
    }

    $(function(){
    // track outbound email links
    var mailto_link = $('a[href^="mailto:"]');
    mailto_link.on('click', function(e){
        var link = $(this).attr('href'),
            category = "Email Links",
            action = "click",
            label = link.replace("mailto:", "");
        trackOutboundLink(link, category, action, label);
        e.preventDefault();
    });
  });
</script>
<!-- google analytics ends-->
	
<!-- /.contact page -->	  
</div> <!-- form_out -->
	</div>	<!-- /.container -->
	</div>
	<div class="clearfix"></div>
	
	<!---------- /.form ------------------->   
	   



<div class="logo-brand">
<h3>SOME OF OUR CLIENTS </h3>
<p>We've worked with top brands and hot startups from around the globe. Here are just a few. </p>
<div class="container">
<img src="<?php echo get_template_directory_uri (); ?>/assets/images/logos-brand.png" alt="services">
</div>

</div>

	
	

<!-- Highlights - jumbotron -->
<div class="jumbotron sectionBox">
  <div class="container">
    <div class="row">
	
	<div class="p_fact">
	<div class="fact_a">
		Factors That <b>Set Us Apart </b> <br>
		<img src="<?php echo get_template_directory_uri (); ?>/assets/images/row-2.png" alt="services"> <br>
		<p> Wherever you’re in the world, we can locate on-site with you or work as an offshore team for you. </p>
		</div>
		</div> <!-- /p_fact -->


	<?php include('counter.php'); ?>
    </div>
    <!-- /row  --> 
    
  </div>
  <div class="clearfix"></div>
</div> 
<!-- container -->	

		
		<div class="testimonial">
		<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   








	   
<!-------testimonial---------->	   
 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works without jquery library. -->
    <script src="<?php echo get_template_directory_uri (); ?>/assets/js/slider/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1024);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <div id="jssor_1" style="position: relative; margin: 0 auto; left: 0px; width: 1024px; height: 350px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri (); ?>/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 700px; height: 350px; overflow: hidden;">
            <div data-p="112.50">
       
	   <div class="cus_t">
	   <p>
	   <span class="qut"><i class="fa fa-quote-left qoute"></i></span> Excellent work and customer focused services. We’re amazed by the performance of IOS/Android apps and website that Buildtoinnov8 has developed for our business. Their app & web developers took care of each little details and delivered premium quality and business-oriented Website and both apps. <span class="qut2"><i class="fa fa-quote-right qoute"></i></span>
	   </p>
	   </div>
                <div data-u="thumb">
                    <img class="i" src="<?php echo get_template_directory_uri (); ?>/assets/images/l-1.png" />
                   
                </div>
            </div>
			
			
			
			
            <div data-p="112.50" style="display: none;">
       <div class="cus_t">
	   <p class="p3" style="color:#fff;">
	   <span class="qut"><i class="fa fa-quote-left qoute"></i></span>Buildtoinnov8 is a team of true professionals who completely understand their work. The best part about them is that they really understand the Customer's  requirement and add their expertise to deliver a quality solution.<span class="qut2"><i class="fa fa-quote-right qoute"></i></span>
	   </p>
	   </div>
                <div data-u="thumb">
                    <img class="i" src="<?php echo get_template_directory_uri (); ?>/assets/images/l-2.png" />
                </div>
            </div>
			
			
            <div data-p="112.50" style="display: none;">
               
		<div class="cus_t">
		<p>
	   <span class="qut"><i class="fa fa-quote-left qoute"></i></span>Buildtoinnov8 had delivered above and beyond our expectations. We hired social media marketing services from Buildtoinnov8, and now our new website has received top rankings in search engines and so much positive feedback and real sales. We would highly recommend Buildtoinnov8 to any company seeking expert digital marketers.<span class="qut2"><i class="fa fa-quote-right qoute"></i></span>
	   </p>
	   </div>
                <div data-u="thumb">
                    <img class="i" src="<?php echo get_template_directory_uri (); ?>/assets/images/l-3.png" />
                </div>
            </div>
        </div>
		
		
		
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px; -moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>          
        </div> 
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
<!---------/.testimonial-------------------->	

  
	   </div>
	   
	   </div>
	   </div> <!-- /testimonial -->	 
		
		<div class="clearfix"></div>


	   
		<div class="about_Buildtoinnov8">
			<div class="p_about">
				<div class="a_Buildtoinnov8">
					About <b>Buildtoinnov8 </b> <br>
					<img src="<?php echo get_template_directory_uri (); ?>/assets/images/row-2.png" alt="about-Buildtoinnov8"> <br>
					<p> <span class="blue"><b>Buildtoinnov8</b></span> is a vibrant technology consulting firm that creates end-to-end solutions, from concept and strategy, to design, development and marketing, helping clients meet their business goals. <br><br>
					To every project, we bring a combination of industry insight, unique company culture and some of the best technical talents in the world. <br><br> 
					<b>Our clients’</b> business outcome is the true measure of our success and pushes us to find creative solutions to the most difficult problems.<br>
					<b>Our vision</b> is to help organizations in the successful and qualitative representation of their businesses on the web by truly understanding their needs. <br><br>
					Whether you want to design and develop a <b>high-end business</b> website or promote it in the online world, contact us now to discuss and start your project.</p>
				</div>
			</div> <!-- /p_about -->
		</div> <!-- /about_Buildtoinnov8 -->
		


	<div class="p_fact">
		<span class="sub_us"> <span class="sub_2">SUBSCRIBE</span> TO US </span> 
			<div class="mail">
			<form id="subsribe-form">
        <input class="mail_s" id="semail" type="email" required placeholder="ENTER YOUR EMAIL">
  			<button class="sub_btn" type="submit"> SUBMIT </button>
      </form>
      <p class="successmsg" style="display:none;">Thank You for subscribing with us.</p>
      <p class="errormsg" style="display:none;">Already Subscribed.</p>
			</div>
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
                    
                    $('.successmsg').show();
                    $('.errormsg').hide();
                    $('#semail').val('');
                    
                    }
                    else {
                      $('#semail').val('');
                      $('.successmsg').hide();
                    $('.errormsg').show();
                    }
                }
            });

        });
</script> 
		
		</div> <!-- /p_fact -->		
	

<?php get_footer(); ?>
