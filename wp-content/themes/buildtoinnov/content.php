<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="blog_outer_cat">
  <div class="container">  
    <div class="row">		

		
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<div class="blog_card_cat">
		<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail();
		?>

<div class="single_t2"><h1><?php echo the_title();?></h1></div> 		

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
		</div>
		</div>
		
	



		<?php
			// Author bio.
			if ( is_single() && get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;
		?>

</div>
</div>
</div>
	</article><!-- #post-## -->
