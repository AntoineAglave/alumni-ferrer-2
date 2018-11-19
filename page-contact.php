<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 class="h1contact"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<div class="row">
        
		 <div class="col-6">
             
              <div class="col-10 mx-auto">
				<img alt="left" src="https://images.pexels.com/photos/1139319/pexels-photo-1139319.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="img-fluid img-contact">
             </div>
            <div class="box mx-auto blue"></div>
              </div>
		
              
            
          
			
       
             <div class="col-6">
			
			<h2 class="titrecontact">INFORMATION DE CONTACT</h2>
			<br>
			<p>02/23.45.67</p>
			<p>ALUMNI@ALUMNI.BE</p>
			<br>
				<h2 class="titrecontact">FORMULAIRE DE CONTACT</h2>
				<br>
			<form>
			<article id="post-<?php the_ID(); ?> " <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
        </form>
                </div>
                </div>
               
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
