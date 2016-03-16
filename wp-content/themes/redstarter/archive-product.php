	<?php
	/**
	 * The template for displaying archive pages.
	 *
	 * @package RED_Starter_Theme
	 */

	get_header(); ?>
	<!--archives product page is this showing products -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="align-title-center">', '</h1>' );
						?>
				</header><!-- product page header -->

				<div class="tagline">
				We are a team of creative and talented individuals who love making delicious treats.
				</div>

				<div><hr class="divider"></div>

				<?php
				$terms = get_terms('product-type');
				?>
				<?php if( ! empty($terms) ) : ?>
					<div class="lrb-categories fixed-width-container" >

						<?php foreach ($terms as $term) : ?>

							<div class="lrb-cat-loop-prod">
								<img src="<?php echo	 get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt=""/>
									<a href="<?php echo get_term_link($term); ?>"><h3><?php echo $term ->name; ?></h3>	</a></p>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

					</div> <!-- end of cat loop fixed width -->

				<div class="fixed-width-container">


					<div class="gallery"> <!-- Start the Loop -->

			 	<?php while ( have_posts() ) : the_post(); ?>
						<header class="gallery-item">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<?php if ( has_post_thumbnail() ) : ?>

									<div class="product-image-loop">
											<?php the_post_thumbnail( 'medium' ); ?>
									</div>

								<?php endif; ?>
			<div class="prod-title-price">
							<?php the_title( '<span class="entry-title">', '</span>' ); ?>
							<span><?php echo CFS()->get( 'price' ); ?></span>
							</div><!-- price -->

							</article><!-- #post-## -->
						</header><!-- gallery-item  -->

				<?php endwhile; ?>
			</div><!-- end gallery -->

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_footer(); ?>
