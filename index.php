<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newearth
 */

get_header();
?>

	 <section id="recyclings-section"> 
		<div class="container">
			<div class="row"> 
				
				<div class="col-xl-12"> 
					<div class="latests-news"> 
						<div class="blogs">
						
				<?php

				while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

				endwhile; ?>

		
							
						</div>
					</div>
				</div>
			</div>
		</div>
   </section>
  

<?php
get_footer();
