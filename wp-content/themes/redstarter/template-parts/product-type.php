<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

<?php if ( has_post_thumbnail() ) : ?>

<div class="prod-type-wrapper">
		<div class="product-type-thumb">
			<?php the_post_thumbnail( 'thumbnail' ); ?>
		</div>

<?php endif; ?>

					<div class="description-price">
							<?php the_title( sprintf( '<h1 class="prod-type-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
								<?php the_excerpt(); ?>
						<?php echo CFS()->get( 'price' ); ?>
					</div>
				</div>
	</header><!-- .entry-header -->

	<div class="entry-content">

	</div><!-- .entry-content -->
</article><!-- #post-## -->
