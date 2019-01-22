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

        <?php
        $source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
       //echo $source;
        $url   = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
     //   echo $url;
        ?>
          

   <?php if ($url) :  ?>
      <span class="source"><a href="<?php echo $url ?>"><?php echo $source ?></a></span>
    <?php else :  ?>
        <span class="source"><?php echo $source ?></span>
    <?php endif; ?>

    </div>



</article><!-- #post-## -->
