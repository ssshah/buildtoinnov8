
<?php  get_header() ?>

   
 
 
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
 
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  
		<header class="blogdetail">
<?php 	twentyfifteen_post_thumbnail(); ?>
</header>
 	 
<div class="container">
 	   <div class="col-md-12">
 <div class="aboutheading black">
	    
	<?php echo the_title();?>  
		</div>
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s', 'twentyfifteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div><!-- .entry-content -->
  		
	



		<?php
			// Author bio.
			if ( is_single() && get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;
		?>
</div>
 </div></div>
	</article><!-- #post-## -->
	<?php

		endwhile;
		?>

		</div>
		

 		</div>
		</div>




		</main><!-- .site-main -->
	</div><!-- .content-area -->

 <?php get_footer()?>