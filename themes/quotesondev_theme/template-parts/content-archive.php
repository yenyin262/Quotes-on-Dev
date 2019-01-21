<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 <?php 
//$args = array(
//'post_type'      => 'post',
//'orderby'        => 'name',
//'posts_per_page' => 5
//);

?>

                    
	<div class="archive-content">
        <?php the_excerpt(); ?>
        
    </div><!-- .entry-content -->
    
    
    <div class="authorDevContainer archiveAuthor" > 
        <h2 class="author_dev">- <?php the_title(); ?> </h2>
    </div>
   
 
</article><!-- #post-## -->
