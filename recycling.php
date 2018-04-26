<?php 
/*
Template Name: Recycling Page
*/
get_header();
?>
<?php 
$recycling_banner_image = get_field('recycling_banner_image');

if($recycling_banner_image):  ?>
<section id="banner-area" style="background-image: url('<?php echo $recycling_banner_image['url']; ?>');">


		<?php $banner_content = get_field('banner_content'); 
		if($banner_content): ?>
		
		<div class="banner-cont"> 
		<?php echo $banner_content ; ?>
		
		</div>
		<?php endif; ?>
		
		
   </section>
<?php endif; ?>
   <section id="recycling-section"> 
		<div class="container">
		
		<?php $recycle_title_page = get_field('recycle_title_page'); 
		if($recycle_title_page): ?>
		
		<h2><?php echo $recycle_title_page ; ?></h2>
		
		
		<?php endif; ?>
		
		
			
			<div class="row"> 
				<div class="col-xl-5"> 
					<div class="link-blok"> 
					
					
					
					<?php $block = get_field('block'); 
					
					if($block): 
					
					foreach($block as $block_single): ?>
					
						<div class="single-block">
							<div class="icons"> 
								<i class="fas fa-<?php echo $block_single['block_icons']; ?>"></i>
							</div>
							<div class="title"> 
								<a href="<?php echo $block_single['block_link']['url']; ?>"><h2><?php echo $block_single['block_title']; ?></h2></a>
							</div>
							<div class="link"><a href="<?php echo $block_single['block_link']['url']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/link.png" alt=""></a></div>
						</div>
						
					<?php endforeach; endif; ?>
						
					</div>
				</div>
				<div class="col-xl-7"> 
					<div class="latest-news"> 
						<h2>Latest News</h2>
						<div class="blog">
						
							<?php 
							
							$recypost = new WP_Query(array(
								'post_type'				=> 'post',
								'posts_per_page'		=> 3,
							));
							
							while($recypost ->have_posts()): $recypost ->the_post();  ?>
							<div class="signle-blog"> 
								<div class="psot-image"> 
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</div>
								<div class="post-content"> 
									<p><?php echo wp_trim_words(get_the_content(), 30, true); ?></p>
								</div>
							</div>
							
							<?php endwhile; ?>

						
						</div>
					</div>
				</div>
			</div>
		</div>
   </section>
   <section id="about-section"> 
		<div class="container"> 
		
				<?php 


				 $page_id     = get_queried_object_id();
				$about_title = get_field('about_title_re',$page_id ); 
					
				if($about_title):  ?>
				<h2><?php echo $about_title; ?></h2>
				<?php endif; ?>
				
			<div class="row"> 
				<div class="col-xl-10"> 
				
				<?php 

				$about_content_re = get_field('about_content_re',$page_id ); 
					
				if($about_content_re):  ?>
				<p><?php echo $about_content_re; ?></p>
				<?php endif; ?>
				</div>
				<div class="col-xl-2"> 
				<?php 

				$about_image = get_field('about_image',$page_id ); 
					
				if($about_image):  ?>
					<a href="#"><img src="<?php echo $about_image['url']; ?>" alt=""></a>
				<?php endif; ?>
				</div>
			</div>

			<div class="about-video"> 
			
			<?php 

				$recycling_video = get_field('recycling_video',$page_id ); 
				
				
					
				if($recycling_video):  ?>
				<div class="embed-responsive embed-responsive-16by9">
					<?php echo $recycling_video; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
   </section>
   <section id="contact-section"> 
		<div class="container"> 
			<?php 
			$contact_title_re	 = get_field('contact_title_re',$page_id ); 
				if($contact_title_re):  ?>
				<h2><?php echo $contact_title_re; ?></h2>
			<?php endif; ?>
			<div class="row"> 
				<div class="col-xl-6">

					<?php 

						$contact_from_shortcode_re = get_field('contact_from_shortcode_re',$page_id);
						
						if($contact_from_shortcode_re): 
						?>
					<div class="contact-form"> 

					<?php echo do_shortcode("$contact_from_shortcode_re"); ?>
					
					</div>
					<?php endif; ?>
				</div>
				<div class="col-xl-6"> 
					<div class="contact-loc"> 
					<?php 
					$contact_rght_title	 = get_field('contact_rght_title',$page_id ); 
						if($contact_rght_title):  ?>
						<h2><?php echo $contact_rght_title; ?></h2>
					<?php endif; ?>
						<div class="address-cont"> 
						
						
							<?php 
							$address_re	 = get_field('address_re',$page_id ); 
							if($address_re):  ?>
							<div class="address"> 
								<div class="add-icons"> 
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="add-cont"> 
									<p><?php echo $address_re; ?></p>
								</div>
							</div>
							<?php endif; ?>
							
							<?php 
							$phone_re	 = get_field('phone_re',$page_id ); 
							if($phone_re):  ?>
							<div class="address"> 
								<div class="add-icons"> 
									<i class="fas fa-phone "></i>
								</div>
								<div class="add-cont"> 
								<p><?php echo $phone_re; ?></p>
								</div>
							</div>
							<?php endif; ?>
							
							
							<?php 
							$email_address_re	 = get_field('email_address_re',$page_id ); 
							if($email_address_re):  ?>
							<div class="address"> 
								<div class="add-icons"> 
									<i class="far fa-envelope"></i>
								</div>
								<div class="add-cont">
									<p><?php echo $email_address_re ?></p>
								</div>
							</div>
							<?php endif; ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
   </section>
     <?php get_footer(); ?>