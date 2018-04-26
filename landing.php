<?php 
/*
Template Name: Landing Page
*/
get_header();
?>

<?php 
$landing_page_banner = get_field('landing_page_banner');

if($landing_page_banner):  ?>
<section id="banner-area-ln" style="background-image: url('<?php echo $landing_page_banner['url']; ?>');" ></section>

<?php endif; ?>

   <section id="new-section"> 
		<div class="container">
			<?php $sections_title_ne = get_field('sections_title_ne'); 
			if($sections_title_ne): ?>
			<h2><?php echo $sections_title_ne; ?></h2>
			<?php endif; ?>
			<div class="row"> 
				<div class="col-xl-6"> 
				
					<?php $left_content_en = get_field('left_content_en'); 
					if($left_content_en): ?>
					<div class="new-earth">

						<?php echo $left_content_en; ?>
						

					</div>
					<?php endif; ?>
					
					
				</div>
				<div class="col-xl-6"> 
					<div class="getin-news"> 
					
						<?php $contact_form_title = get_field('contact_form_title'); 
						
						if($contact_form_title): ?>
					
						<h2><?php echo $contact_form_title ; ?></h2>
						
						<?php endif; ?>
						
						<?php 

						$landing_page_contact_form_shortcode = get_field('landing_page_contact_form_shortcode');
						
						if($landing_page_contact_form_shortcode): 
						?>
						<div class="cont-form">
							
							
							<?php echo do_shortcode("$landing_page_contact_form_shortcode"); ?>
							
							
						</div>
						<?php endif; ?>
						
						
					</div>
				</div>
			</div>
		</div>
   </section>
   <section id="contact-us-section"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-xl-6"> 
					<?php $contact_us_left_image = get_field('contact_us_left_image'); 

					if($contact_us_left_image): ?>
					<a href="#"><img src="<?php echo $contact_us_left_image['url']; ?>" alt=""></a>
					<?php endif; ?>
					
				</div>
				<div class="col-xl-6"> 
					<div class="address-cont-ln">
					<?php $contact_us_title = get_field('contact_us_title'); 

					if($contact_us_title): ?>
						<h2><?php echo $contact_us_title; ?></h2> 
						<?php endif; ?>
							<div class="address"> 
								<div class="add-cont"> 
								
								<?php $contact_address = get_field('contact_address'); 

								if($contact_address): ?>
									<?php echo $contact_address; ?>
									<?php endif; ?>
								
								</div>
							</div>
							
						</div>
				</div>
			</div>

		</div>
   </section>
   <section id="testimonial-section" style="background: <?php echo get_field('section_background_tes'); ?>;"> 
		<div class="container"> 
				
					<div class="border-row">
						<?php $testimonial_title = get_field('testimonial_title'); 

						if($testimonial_title): ?>
						<h2><?php echo $testimonial_title; ?></h2>
							<hr>
						<?php endif; ?>

				</div>
			<div class="row"> 
				<div class="col-xl-12"> 
				
					<?php $testimonial_content = get_field('testimonial_content'); 

						if($testimonial_content): ?>
						<?php echo $testimonial_content; ?>
						<?php endif; ?>
						
						
					
					
				</div>
			</div>

		</div>
   </section>
  <?php get_footer(); ?>