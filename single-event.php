<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="pt-5 mt-5">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row m-0 p-0">
			<div class="container-fluid single pt-5 mt-5">
				<div class="row m-0 p-0" id="flex">
					<div class="col-xl-6 col-md-12">
						<div class="col-10 single-img mx-auto">
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
							<?php endif; ?>
						</div>
						<div class="box mx-auto"></div>
					</div>	
					<div class="col-xl-6 col-md-12">
						<div class="col-12 col-xl-10 mx-auto">
							<h1 class="title-art">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h1>
							<div class="catgry">
								<h4></h4>
								<p class="date"><?php the_time('j/m/Y'); ?></p>		
							</div>	
						<?php the_content(); // Dynamic Content ?>
						</div>	
					</div>
				</div>
			</div>

	<?php endwhile; ?>

	<?php else: ?>
				
	</div>			

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

