<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newearth
 */

?>

	  <footer id="footer-section" style="background: <?php echo get_field('header_color','options'); ?>"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-xl-6"> 
					<div class="footer-menu">
					 <?php wp_nav_menu(array(
						'theme_locaiton'	=> 'main-menu',
					)); ?>
					</div>
				</div>

				<div class="col-xl-6"> 
					<div class="social-icons"> 
						<h2>Folow Us</h2>
						<ul>
						
							<?php $facebook_url = get_field('facebook_url','options');

							if($facebook_url): ?>	 
							<li><a href="<?php echo $facebook_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt=""></a></li>
							
							<?php endif; ?>
							<?php $twitter_url = get_field('twitter_url','options');

							if($twitter_url): ?>	
							<li><a href="<?php echo $twitter_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt=""></a></li>
							<?php endif; ?>
							<?php $google_url = get_field('google_url','options');

							if($google_url): ?>	
							<li><a href="<?php echo $google_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/google-plus.png" alt=""></a></li>
							<?php endif; ?>
							<?php $instagram_url = get_field('instagram_url','options');

							if($instagram_url): ?>	
							<li><a href="<?php echo $twitter_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/instragram.png" alt=""></a></li>
							<?php endif; ?>
					
						</ul>
					</div>
				</div>
			</div>
		</div>
   </footer>


	<?php wp_footer(); ?>
  </body>
</html>