<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="title-art">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			
			<div class="catgry">
			<h4></h4>
			</div>
			<p class="date"><?php the_time('j/m/Y'); ?></p>
			
			<div class="container single">
				<div class="row">
					<div class="col-6">
						<div class="col-10 single-img">
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
							<?php endif; ?>
						</div>
						<div class="box mx-auto"></div>
					</div>	
					<div class="col-6">
					<?php the_content(); // Dynamic Content ?>
					</div>
				</div>
			</div>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

