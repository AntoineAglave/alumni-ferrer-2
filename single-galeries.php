<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="pt-5 mt-5">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="pt-5">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			
			<!-- /post details -->
            <div class="container ">
            <div class="row cr-galeries">
				<div class="col-12">
			<?php the_content(); // Dynamic Content ?>
				</div>
				<div class="box2 mx-auto col-12"></div>
          </div>
				
            </div>
            
        
			

		</article>
		<!-- /article -->

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

<?php get_footer(); ?>
