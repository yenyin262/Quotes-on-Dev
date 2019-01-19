<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

	<h2>Quotes Authors</h2>

	<?php 
                    $args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => '-1' );
                    $author_posts = get_posts( $args ); // returns an array of posts
                ?>
                    <?php foreach ( $author_posts as $post ) : setup_postdata( $post ); ?>
	
                   
    <a href="<?php echo get_post_permalink($post)?>" class="author-name"><?php echo the_title(); ?></a>


	<?php endforeach; wp_reset_postdata(); ?>

	

	</div>

	<div class="entry-content">

	<h2>Categories</h2>

  <?php  $categories = get_categories( 'category' ); // returns an array of category
    ?>
    <?php foreach ( $categories as $category ) { ?>
                   
    <a href="<?php echo get_category_link($category)?>" class="category-title"><?php echo $category ->name; ?></a>
                
    <?php }?>
                    
    </div>


<div class="entry-content">
<h2>Tags</h2>
<?php  $tags= get_tags( 'tags' ); // returns an array of category
                    ?>
 <?php foreach ( $tags as $tag) { ?>
                   
<a href="<?php echo get_category_link($tag)?>" class="tag-title"><?php echo $tag ->name; ?></a>
                
<?php }?>

</div>

<div class="entry-content">

	</div><!-- .entry-content -->
</article><!-- #post-## -->
