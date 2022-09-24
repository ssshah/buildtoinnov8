 <?php get_header() ?>
<style>
    .top-space{
        margin-top:0px;
    }
    #head-cover32 {
    background-image: url(<?php echo get_template_directory_uri();?>/assets/images/Banner-Contact-Us-1024x278.png);
    background-position: center bottom !important;
    background-size: unset;
}
   .form__fields--newsletter .form__field,#semail, #mce-FNAME{border-bottom:0px;}
</style>	
<div class="" style="    background-color: transparent;
    background-image: linear-gradient(90deg, #ffffff 0%, #55b93491 100%)">
<header id="head-cover32">
	<div class="container">	

	</div>
</header>
    </div>
<!-- Blog Section -->
<div class="blog_outergm">
  <div class="container">  
    <div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blog_outer"> <!--left side-->
	<div class="blog_t">


	</div>


				<?php
		          $args = array( 'numberposts' => -1,'category_name'=>'recent' );
		          $lastposts = get_posts( $args );
		          foreach($lastposts as $post) : setup_postdata($post); ?>
		            
		            
		            <?php 
		            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		            ?>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<div class="blog_card">

						
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo $feat_image?>" alt="" />	
							</a>
				
						<div class="post-bottom">
							<a href="<?php the_permalink(); ?>">
							<h1><?php $title  = the_title('','',false);
if(strlen($title) > 45):
    echo trim(substr($title, 0, 45)).'...';
else:
    echo $title;
endif; ?></h1></a>
							<p><?php echo substr(excerpt(170),0,90); ?></p>
							
							<div class="blog_b">
							<p>
								<span class="date_blog"><i class="fa fa-calendar"></i> Post on <?php the_time('F j, Y') ?></span>
								
								<span class="art_blog">
								<a href="#"><i class="fa fa-comment-o"></i> <?php echo get_comments_number($post->ID)?></a></span>
								</p>
							</div>
							
							
							
						</div>
					</div><!--end post-->
				</div>
				<?php endforeach; ?>
				
		</div> <!--/.left side-->

<!-- right bar -->
<?php include('right.php');?>
<!--/.right bar-->


		</div>
		</div>
		</div>
	<!--end blog-->


 
 <?php get_footer() ?>