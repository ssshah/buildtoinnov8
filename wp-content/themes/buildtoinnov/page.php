<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

//get_header(); 

 $pagename = get_query_var('pagename');  
?>



		<?php

		// Start the loop.
		while ( have_posts() ) : the_post();
			//echo $pagename;
			// Include the page content template.
			get_template_part( 'content', 'page' );
			if($pagename=='digital-marketing-companies-in-dubai')
			{
				include('services.php');
			}
			if($pagename=='blog')
			{
				include('blog.php');
			}
			if($pagename=='software-development-company-services-dubai-uae')
			{
				include('software-development.php');
			}
			if($pagename=='mobile-apps-development-company-dubai')
			{
				include('app-development.php');
			}
			if($pagename=='web-development-company-services-dubai-uae')
			{
				include('web-development.php');
			}
			if($pagename=='responsive-websites-design-services')
			{
				include('responsive-design.php');
			}
			if($pagename=='uiux-design-agency-services')
			{
				include('ui-design.php');
			}
			if($pagename=='landing-page-design')
			{
				include('landing-pages-design.php');
			}
			if($pagename=='affordable-web-maintenance-services')
			{
				include('web-maintenance.php');
			}
			if($pagename=='ecommerce-development-servicess-website-design')
			{
				include('ecommerce-development.php');
			}
			
			if($pagename=='shopify-development-services-company')
			{
				include('shopify-development.php');
			}
			if($pagename=='cratejoy-development-services')
			{
				include('cratejoy-development.php');
			}
			if($pagename=='open-cart')
			{
				include('open-cart.php');
			}
			if($pagename=='woocommerce-development-services-company')
			{
				include('woocommerce.php');
			}
			if($pagename=='big-commerce')
			{
				include('big-commerce.php');
			}
			if($pagename=='square-space-web-development-company')
			{
				include('square-space.php');
			}
			if($pagename=='magento-development-services-company')
			{
				include('magento.php');
			}
			if($pagename=='lightspeed-website-development-services')
			{
				include('lightspeed.php');
			}
			if($pagename=='digital-marketing-agency-dubai-uae')
			{
				include('digital-marketing.php');
			}
			if($pagename=='seo-agency-dubai')
			{
				include('seo.php');
			}
			if($pagename=='social-media-marketing-agency-dubai')
			{
				include('social-media-marketing.php');
			}
            if($pagename=='ios-apps-development-company-dubai')
			{
				include('ios.php');
			}
			if($pagename=='email-marketing-services-agency')
			{
				include('email-marketing.php');
			}
			
			if($pagename=='content-marketing-agency-services')
			{
				include('content-marketing.php');
			}
			if($pagename=='digital-advertising-services-sem-ppc')
			{
				include('digital-advertising.php');
			}
			
			if($pagename=='analytics')
			{
				include('analytics.php');
			}
			if($pagename=='enterprise-solutions')
			{
				include('enterprise-solutions.php');
			}
			if($pagename=='loyalty-program')
			{
				include('loyalty-programs.php');
			}
			if($pagename=='enterprise-mobility-services-solutions')
			{
				include('enterprise-mobility.php');
			}
			if($pagename=='content-management-system')
			{
				include('content-management.php');
			}
			if($pagename=='customer-relationship-management-salutions')
			{
				include('customer-relationship.php');
			}
			if($pagename=='cloud-saas')
			{
				include('cloud-saas.php');
			}
			if($pagename=='big-data')
			{
				include('big-data.php');
			}
			if($pagename=='business-intelligence')
			{
				include('business-intelligence.php');
			}
			if($pagename=='portfolio')
			{
				include('portfolio.php');
			}
			if($pagename=='shopify')
			{
				include('shopify.php');
			}
			if($pagename=='php')
			{
				include('php.php');
			}
			if($pagename=='codeigniter')
			{
				include('codeigniter.php');
			}
			if($pagename=='laravel')
			{
				include('laravel.php');
			}
			if($pagename=='wordpress')
			{
				include('wordpress.php');
			}
			if($pagename=='megento')
			{
				
				include('megento.php');
			}
			if($pagename=='joomla')
			{
				include('joomla.php');
			}
			if($pagename=='mobile')
			{
				include('mobile.php');
			}
			if($pagename=='iphone')
			{
				include('iphone.php');
			}
			if($pagename=='android')
			{
				include('android.php');
			}
			if($pagename=='android-apps-development-company-dubai-uae')
			{
				include('android-apps-development.php');
			}
			if($pagename=='hybrid-apps-development-company-services-dubai-uae')
			{
				include('hybrid-apps-development.php');
			}
			if($pagename=='windows-phone-apps-development-company-dubai-uae')
			{
				include('windows-phone-apps-development.php');
			}
			if($pagename=='dm')
			{
				include('dm.php');
			}
			if($pagename=='cm')
			{
				include('cm.php');
			}
			if($pagename=='seo')
			{
				include('search_engine_optimization.php');
			}
			if($pagename=='smm')
			{
				include('smm.php');
			}
			if($pagename=='em')
			{
				include('em.php');
			}
			if($pagename=='clients')
			{
				include('clients.php');
			}
			if($pagename=='about-us')
			{
				include('about-us.php');
			}
			if($pagename=='contact-us')
			{
				include('contact-us.php');
			}
			if($pagename=='thank-you')
			{
				include('thankyou.php');
			}

			// If comments are open or we have at least one comment, load up the comment template.
			

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


