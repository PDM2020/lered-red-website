	<?php
	/**
	 * Template Name: About Page
	 */

	get_header(); ?>

	<!--single post-->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div clas="content-area">

					<div class="page-header align-title-center">
					<h1>Learn About Our Team and Culture</h1>
							</div>

							<div class="tagline">
								<?php echo CFS()->get('tagline');?>
							</div>

		<div><hr class="divider"></div>
							<div class="span-two-col fixed-width-container">

							<div class="left-col">
								<img src="<?php echo get_template_directory_uri() ?>/images/team.jpg" height=480px width=480px alt="Le Red Bread Team" />
							<div><?php echo CFS()->get('team_copy');?></div>
							</div>

								<div class="right-col">
									<img src="<?php echo get_template_directory_uri() ?>/images/bakery.jpg" height=480px width=480px alt="Le Red Bread Bakery" />
								<div><?php echo CFS()->get('bakery_copy');?></div>
								</div>

							</div><!-- two-span-col -->

								<div class="align-title-center">
							<h1>Our Story</h1></div>
							<div class="our-story">
							<?php echo CFS()->get('our_story_copy');?>
						</div>
							<div class="products-cta"><!-- products cta button -->
								<p><span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
 <button class="front-page-btn"><a href="/contact-us/">Contact Us</a></button></p>
							</div>


			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>
