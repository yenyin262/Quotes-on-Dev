<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="archive-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="author-content">
    <h2>Quotes Authors</h2>
    <ul>
	<?php 
                    $args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => '-1' );
                    $author_posts = get_posts( $args ); // returns an array of posts
                ?>
                    <?php foreach ( $author_posts as $post ) : setup_postdata( $post ); ?>

                <li> <a href="<?php echo get_post_permalink($post)?>" class="author-name"><?php echo the_title(); ?></a> <li>
    <?php endforeach; wp_reset_postdata(); ?>
  
    </ul>
	</div>

	<div class="category-content">
	<h2>Categories</h2>
<ul>
  <?php  $categories = get_categories( 'category' ); // returns an array of category
    ?>
    <?php foreach ( $categories as $category ) { ?>
                   
   <li> <a href="<?php echo get_category_link($category)?>" class="category-title"><?php echo $category ->name; ?></a><li>
                
    <?php }?>
       <ul>             
    </div>


<div class="tags-content">
<h2>Tags</h2>
<ul>
<?php  $tags= get_tags( 'tags' ); // returns an array of category
                    ?>
 <?php foreach ( $tags as $tag) { ?>
                   
<li><a href="<?php echo get_category_link($tag)?>" class="tag-title"><?php echo $tag ->name; ?></a><li> 
                
<?php }?>
 </ul>
</div>

<!-- <div class="entry-content"> -->

	<!-- </div>.entry-content -->
</article><!-- #post-## -->
