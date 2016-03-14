<?php
/**
* Homepage Template.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="banner-image">
			<div class="banner-text">Baked To Perfection</div>
		</div>

		<?php
		$terms = get_terms('product-type');
		?>
		<?php if( ! empty($terms) ) : ?>

			<div class="lrb-categories fixed-width-container" >

				<?php foreach ($terms as $term) : ?>

					<div class="lrb-cat-loop">
						<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt=""/>
						<h3><?php echo $term ->name; ?></h3>
						<p><?php echo $term ->description; ?>
							<a href="<?php echo get_term_link($term); ?>">See more...</a></p>
						</div>

					<?php endforeach; ?>

				<?php endif; ?>

			</div>

			<div class="products-cta"><!-- products cta button -->
				<p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently. <button class="front-page-btn"><a href="/products/">See Our Products</a></button></p>
			</div>

			<div class="latest-news-posts">

				<div class="latest-news-title"><h1>Latest News</h1><hr class="divider"></div>

				<div class="fixed-width-container"><!-- products loop-->

					<div class="news-post-loop">

						<?php $args = array ( 'post_type' => 'post', 'posts_per_page' => 4 );
						$lastest_posts = get_posts( $args ); ?>

						<?php foreach ($lastest_posts as $post) : setup_postdata( $posts ); ?>
							<ul>
								<li>

										<?php if ( has_post_thumbnail() ): ?>
											<div class="image-post-loop">
												<?php the_post_thumbnail( 'large' ); ?>
											</div>
										<?php endif; ?>

										<div class="news-loop-title">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


											<div class="entry-meta">
												<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
											</div><!-- entry-meta -->
										</div>

								</li>
							</ul>

						<?php endforeach; wp_reset_postdata();?>
					</div>
	<div class="align-title-center"><h1>what others say about us</h1><hr class="divider"></div>

	<div class="testimonials-wrapper fixed-width-container">

					<div class="testimonial-1">
						<div class="testimonial-img">
							<img src="<?php bloginfo('template_directory'); ?>/images/dr-dosist-headshot.png "/>
						</div>
						<div class="testimonial-copy">
								<div>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</div>
								<span class="test-name">Dr. Dosist</span>
								<span class="test-job">Nutritionist - Health Time Clinic</span>
						</div>
				</div><!-- testimonial 1-->
				<div class="testimonial-2">
					<div class="testimonial-img">
						<img src="<?php bloginfo('template_directory'); ?>/images/maxi-milli-headshot.png"/>
					</div>
					<div class="testimonial-copy">
								<div>Do you like bread? Seriously, who doesn't? You have to check Le Red Bread's lovely loaves. Fresh flavours every day...need I say more?</div>
								<span class="test-name">Maxi Milli</span>
								<span class="test-job">Chef - Sailor Sppon</span>
					</div>
			</div><!-- testimonial 2-->

			<div class="testimonial-3">
				<div class="testimonial-img">
					<img src="<?php bloginfo('template_directory'); ?>/images/ana-vandana-headshot.png"/>
				</div>
				<div class="testimonial-copy">
						<div>Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</div>
						<span class="test-name">Anna Vandana</span>
						<span class="test-job">Author - Food Is Great Magazine</span>
				</div>
		</div><!-- testimonial 3-->
		<div class="testimonial-4">
			<div class="testimonial-img">
				<img src="<?php bloginfo('template_directory'); ?>/images/martha-m-masters-headshot.png "/>
			</div>
			<div class="testimonial-copy">
						<div>Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</div>
						<span class="test-name">Martha M. Masters</span>
						<span class="test-job">Food Critic - Wiki Travel</span>
			</div>
	</div><!-- testimonial 4-->

	</div> <!-- test-wrapper -->
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary-->


	<?php get_footer(); ?>
