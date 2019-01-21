<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class=submitPage>
    <header class="entry-header">
		<?php the_title( '<h1 class="submit-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <div class="submitQuoteSection">

    <?php if ( is_user_logged_in() ) { ?>

        <form id="quote-form" action='page-submit.php' method='POST'>
            Author of Quote: <br><input type="text" name="Author"><br>
            Quote: <br> <input type="text" name="Quote"><br>
            Where did you find this quote? (e.g bookname): <br><input type="text" name="findQuote" value=""><br>
            Provide the URL of the quote source, if available.<br><input type="text" name="quoteSource" value=""><br>
            <input type="submit" id= "submitButton" value="Submit Quote">
        </form>
        </div>

    <?php } else { ?>
       

    <div class="loginMessage">  
         <p>Sorry, you must be logged in to submit a quote!</p>
        <a class="loginLink" href="http://localhost:3000/Project_5/wp-login.php">Click here to login.</a> 
    </div>
    
    <?php } ?>

    
</div>


	
</article><!-- #post-## -->
