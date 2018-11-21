<?php get_header(); ?>

	<main role="main" class="pt-3 mt-5 mb-5">
		<!-- section -->
		<section class="pt-5 mt-5">

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<div class="row container-fluid pt-3 row align-items-center">
        
		 <div class="col-12 col-md-6">
             
              <div class="col-10 mx-auto">
			<h1 class="h1contact"><?php the_title(); ?></h1>	  
				<img alt="left" src="https://images.pexels.com/photos/1139319/pexels-photo-1139319.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="img-fluid img-contact">
             </div>
            <div class="box mx-auto blue"></div>
              </div>
		
              
            
          
			
       
             <div class="col-12 col-md-6">
			<div class="col-10 mx-auto">	 
			
			<h2 class="titrecontact">Informations de contact</h2>
				<p>02/123.45.67</p>
				<p>alumni@alumni.be</p>
			<h2 class="titrecontact">Formulaire de contact</h2>	
			<div class="row">
				<div class="col-12 col-md-6 p-0 mt-3 mb-3">	
					<input class="form-control form-control-lg" type="text" placeholder="Nom">
				</div>	
				<div class="col-12 col-md-6 p-0 p-0 mt-3 mb-3">	
					<input class="form-control form-control-lg" type="text" placeholder="Prénom">
				</div>	
			<div class="col-12 mt-3 mb-3 p-0">	
			<input class="form-control form-control-lg" type="text" placeholder="Adresse mail">
			</div>	
				
			<div class="col-12 mt-3 mb-3 p-0">		
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Sujet"></textarea>
				</div>
			</div>		

			</article>
        </form>
				</div>
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

<?php get_footer(); ?>
