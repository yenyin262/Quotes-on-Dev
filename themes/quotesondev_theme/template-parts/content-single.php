<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		
	</header><!-- .entry-header -->


 <div class="quotesbyauthor"> 
   <p>  <?php  the_excerpt(); ?> </p>
 </div>

 <div class="authorDevContainer" > 
        <h2 class="author_dev">- <?php the_title(); ?> </h2>

		<?php
        $source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
       //echo $source;
        $url   = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
     //   echo $url;
        ?>
          

   <?php if ($url) :  ?>
      <span class="source">, <a class="sourceLink" href="<?php echo $url ?>"><?php echo $source ?></a></span>
    <?php else :  ?>
        <span class="source"><?php echo $source ?></span>
    <?php endif; ?>
</div>
	              
<div class="button-container">
    <button class="showMeAnotherButton" id="quote-button"><a href="<?php the_permalink() ?>">Show Me Another!</a></button>
</div> 
</article><!-- #post-## -->
