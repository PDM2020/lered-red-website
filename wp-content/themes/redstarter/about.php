<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<!--single post-->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div clas="content-area">

				<div class="align-title-center">
				<h1>Learn About Our Team and Culture</h1>
						<?php echo CFS()->get('tagline');?>
						</div>

						<div class="span-two-col fixed-width-container">

						<div class="left-col">
							<img src="<?php bloginfo('template_directory'); ?>/images/team.jpg" height=480px width=480px alt="Le Red Bread Team" />
						<?php echo CFS()->get('team_copy');?>
						</div>

							<div class="right-col">
								<img src="<?php bloginfo('template_directory'); ?>/images/bakery.jpg" height=480px width=480px alt="Le Red Bread Bakery" />
							<?php echo CFS()->get('bakery_copy');?>
							</div>

						</div><!-- two-span-col -->

							<div class="align-title-center">
						<h2>Our Story</h2></div>
						<?php echo CFS()->get('our_story_copy');?>


		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
