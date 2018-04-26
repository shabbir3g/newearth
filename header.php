<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newearth
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
	  <header> 
	  
		<nav class="navbar navbar-expand-lg navbar-light header-bg" style="background: <?php echo get_field('header_color','options'); ?>">
		
		<?php $logo_uploader = get_field('logo_uploader','options');

		if($logo_uploader): ?>
	  <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $logo_uploader['url']; ?>" alt="" /></a>
	  <?php endif; ?>
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  
	  <?php wp_nav_menu(array(
			'theme_locaiton'	=> 'main-menu',
			'menu_class'		=> 'navbar-nav mr-auto',
	  )); ?>

	  </div>
	  <div class="right-area">
		<?php $header_social_mendia = get_field('header_social_mendia','options');

		if($header_social_mendia): ?>	  
			<div class="social-icons"> 
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
			<?php endif; ?>
			
			<?php $search_form_onoff = get_field('search_form_onoff','options');

		if($search_form_onoff): ?>
			<form class="form-inline my-2 my-lg-0" method="GET" action="<?php echo home_url(); ?>">
			  <input class="form-control mr-sm-2" name="s" id="s" type="search" placeholder="Search" aria-label="Search">
			  <i class="fas fa-search"></i>
			</form>
		<?php endif; ?>
			
		</div>
	</nav>
   </header>
