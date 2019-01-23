<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php 
  query_posts('showposts=1&orderby=rand'); 
  the_post();
?> 

  <div class="quotesbyauthor"> 
    <p><?php  the_excerpt(); ?></p>
  </div>

  <div class="authorDevContainer" > 
    <h2 class="author_dev">- <?php the_title(); ?> </h2>
     <?php
       $source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
       $url   = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
      ?>
   <?php if ($url) :  ?>
      <span class="source"><a class="sourceLink" href="<?php echo $url ?>"><?php echo $source ?></a></span>
    <?php else :  ?>
        <span class="source"><?php echo $source ?></span>
    <?php endif; ?>
  </div>
    
<div class="button-container">
    <button class="showMeAnotherButton" id="quote-button"><a href="<?php the_permalink() ?>">Show Me Another!</a></button>
</div> 


</article><!-- #post-## -->
