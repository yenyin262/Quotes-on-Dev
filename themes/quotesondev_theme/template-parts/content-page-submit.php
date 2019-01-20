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

    <div class="submitQuoteSection">

<?php if ( is_user_logged_in() ) { ?>

<form id="quote-form" action='page-submit.php' method='POST'>
Author of Quote: <br><input type="text" name="Author"><br>
Quote: <br> <input type="text" name="Quote"><br>
Where did you find this quote? (e.g bookname): <br><input type="text" name="findQuote" value=""><br>
Provide the URL of the quote source, if available.<br><input type="text" name="quoteSource" value=""><br>
<input type="submit" value="Submit Quote">
</form>


<?php } else { ?>
    <!-- <div class="entry-content"> -->

    <p>Sorry, you must be logged in to submit a quote!</p>

    <a href="https://quotes.academy.red/wp-login.php">Click here to login.</a>
    
<?php } ?>

</div>



	</div><!-- .entry-content -->
</article><!-- #post-## -->
