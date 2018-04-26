<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package newearth
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		
		if(have_posts()):
		
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		
		else: ?>
		
		
		<h2>No Search Result Found</h2>
		
		
	<?php 	endif;
		
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
