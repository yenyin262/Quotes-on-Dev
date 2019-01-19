<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header"> -->
        <?php 
            //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        ?>

        <div class=homepage-title-containter> 
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class ="q-logo" src="<?php echo get_template_directory_uri() . '/images/qod-logo.svg' ?> " alt="quotes on dev logo."/></a>
        </div>

	<!-- </header> -->

	<!-- <div class="entry-content"> -->
<?php 
  query_posts('showposts=1&orderby=rand'); 
   the_post();
 ?> 
 <div class="quotesbyauthor"> <?php  the_excerpt(); ?> </div>
  <div class="author_dev" > <?php the_title(); ?> </div>
    

   
</div><!-- .entry-content -->
           
              
<div class="button-container">
    <button class="showMeAnotherButton" id="quote-button"><a href="<?php the_permalink() ?>">Show Me Another!</a></button>
</div> 


</article><!-- #post-## -->
