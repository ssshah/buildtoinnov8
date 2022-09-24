<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 riht_cate">




<div class="col_cat">
<a href="#" rel="toggle[categories_blog]" data-openimage="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" data-closedimage="<?php echo get_template_directory_uri (); ?>/assets/images/expand.png"> <span class="cate_head"> CATEGORIES </span>
<span class="colaps_img"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" border="0" /></span>
</a> 
<hr class="row_hr">
</div>

<div id="categories_blog">
<ul>
    

                
                <?php                  
                  $args = array( 'numberposts' => -1,'category_name'=>'category' );
                  $lastposts = get_posts( $args );                  
                  foreach($lastposts as $post) : setup_postdata($post); 
                  ?>
                  <span class="cat_l"><a href="<?php echo the_permalink()?>"><?php echo the_title()?></a></span><br>
                  <?php endforeach; ?> 

                  


</ul>
</div>

<div class="clearfix"></div>




<div class="col_cat">
<a href="#" rel="toggle[tags_blog]" data-openimage="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" data-closedimage="<?php echo get_template_directory_uri (); ?>/assets/images/expand.png"> <span class="cate_head"> TAGS </span>
<span class="colaps_img"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" border="0" /></span>
</a>
<hr class="row_hr">
</div>


<div id="tags_blog">
<ul>
                <?php                  
                  $args = array( 'numberposts' => -1,'category_name'=>'tags' );
                  $lastposts = get_posts( $args );                  
                  foreach($lastposts as $post) : setup_postdata($post); 
                  ?>
                  <span class="tag_l"><a href="<?php echo the_permalink()?>"><?php echo the_title()?></a></span><br>
                  <?php endforeach; ?> 

</ul>
</div>
<div class="clearfix"></div>


<div class="col_cat">
<a href="#" rel="toggle[archives_blog]" data-openimage="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" data-closedimage="<?php echo get_template_directory_uri (); ?>/assets/images/expand.png"> <span class="cate_head"> ARCHIVES </span>
<span class="colaps_img"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" border="0" /></span>
</a>
<hr class="row_hr">
</div>


<div id="archives_blog">

<ul>
                <?php                  
                  $args = array( 'numberposts' => -1,'category_name'=>'archives' );
                  $lastposts = get_posts( $args );                  
                  foreach($lastposts as $post) : setup_postdata($post); 
                  ?>
                  <span class="cat_l"><a href="<?php echo the_permalink()?>"><?php echo the_title()?></a></span><br>
                  <?php endforeach; ?> 

</ul>

</div>
<div class="clearfix"></div>





<div class="col_cat">
<a href="#" rel="toggle[recent_post]" data-openimage="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" data-closedimage="<?php echo get_template_directory_uri (); ?>/assets/images/expand.png"> <span class="cate_head"> RECENT POST </span>
<span class="colaps_img"><img src="<?php echo get_template_directory_uri (); ?>/assets/images/collapse.png" border="0" /></span>
</a> 
<hr class="row_hr">
</div>

<div id="recent_post">
<ul>                
                <?php                  
                  $args = array( 'numberposts' => -1,'category_name'=>'recent' );
                  $lastposts = get_posts( $args );                  
                  foreach($lastposts as $post) : setup_postdata($post); 
                  ?>
                  <span class="cat_l"><a href="<?php echo the_permalink()?>"><?php echo the_title()?></a></span><br>
                  <?php endforeach; ?> 
</ul>
</div>

<div class="clearfix"></div>


</div><!--/.right bar-->	