s<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<div class="hero-image">
			<div class="tag-line">Baked To Perfection</div>
			</div>

			<?php
				$terms = get_terms('product-type');
				?>
			<?php if( ! empty($terms) ) : ?>
<div class="lrd-categories fixed-width-container" >
					<?php foreach ($terms as $term) : ?>

											<div class="lrd-cat-loop">
											<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt=""/>
											<h3><?php echo $term ->name; ?></h3>
											<p><?php echo $term ->description; ?>
												<a href="<?php echo get_term_link($term); ?>">See more...</a></p>
											</div>

						<?php endforeach; ?>
</div>
					<?php endif; ?>

				<?php
							$args = array ( 'post_type' => 'post', 'posts_per_page' => 4 );
							$lastest_posts = get_posts( $args );
						?>

						<?php foreach ($lastest_posts as $post) : setup_postdata( $posts ); ?>
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail( 'medium' ); ?>
							<?php endif; ?>

							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<div class="entry-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
							</div><!-- .entry-meta -->

						<?php endforeach; wp_reset_postdata();?>
	</main><!-- #main -->
</div><!-- #primary-->


<?php get_footer(); ?>
