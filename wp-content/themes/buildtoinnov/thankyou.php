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


	
	
<!-- Highlights - jumbotron -->
<div class="thank_y">
  <div class="container">
    <div class="row">	
	
<div class="t_heading">
<h1>THANK YOU FOR CONTACTING US </h1> <br>

<p>
One of our Team Members will get in touch with you in 24-48 hours
</p>
</div>

<div class="read_b">
<h2> MEANWHILE ENJOY READING OUR VALUABLE RECENT BLOGS.  </h2>
</div>


<div class="blog_r">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<a href="http://Buildtoinnov8.com/blog/5-reasons-to-choose-php-for-web-applications-development/" target="_blank">
<img class="img-responsive" src="<?php echo get_template_directory_uri (); ?>/assets/images/blog-1.jpg">
</a>
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<a href="http://Buildtoinnov8.com/blog/looking-for-a-perfect-software-solution-trust-on-custom-software-development-company/" target="_blank">
<img class="img-responsive" src="<?php echo get_template_directory_uri (); ?>/assets/images/blog-2.jpg">
</a>
</div>

</div>

		
	</div>
    <!-- /row -->  
  </div>
</div> 
<!-- thank_y -->	
	
<?php get_footer(); ?>	
	
</body>
</html>