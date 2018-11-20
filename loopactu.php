<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="col-12  col-md-6 article <?php foreach((get_the_category()) as $category) { echo $category->slug . ' '; } ?>
"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="actu">
					<a href="<?php echo get_permalink(); ?>">
					<h4></h4>
					<h3><?php the_title(); ?></h3>
					<p><?php the_time('d/m/Y') ?></p>
					<p><?php the_excerpt(); ?></p>
					</a>
				</div>
		
	</article></div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>