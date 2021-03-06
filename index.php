<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
				<div class="background"> <!--STATIQUE-->
	<div class="center">
	<h1>Bienvenue aux<br><span>Alumni Ferrer</span></h1>
	</div>
	</div>
	
	<div class="container-fluid mb-5">
		<div class="row align-items-center mt-5 p-0 m-0">
		<div class="col-xl-6 col-12">
			<div class="col-10 mx-auto index">	
				<img alt="left" src="https://images.pexels.com/photos/1139319/pexels-photo-1139319.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="img-fluid">
			</div>
						<div class="box mx-auto blue"></div>
			
		</div>
		<div class="col-xl-6 col-12">
			<div class="col-10 mx-auto">
		<h2 class="pb-3">Lorem ipsum</h2>	
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu convallis risus. Morbi quis est orci. Etiam commodo ullamcorper varius. Nunc dignissim lacus in porta pulvinar. Nunc lectus enim, venenatis vitae dolor laoreet, dignissim aliquam purus. Vestibulum varius eleifend justo, et ultricies lacus. Nam vestibulum orci sed commodo blandit. Suspendisse nec nisi tincidunt, commodo metus non, interdum ante. Phasellus in dignissim dolor, vel vehicula leo. Vivamus dignissim tellus sit amet nunc scelerisque sodales.</p>
		</div>
		</div>	
		</div>
		<div class="row align-items-center mt-5 p-0 m-0">
		<div class="col-xl-6 col-12 text-right">
			<div class="col-10 mx-auto">
		<h2 class="pb-3">Dolor sit amet</h2>	
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu convallis risus. Morbi quis est orci. Etiam commodo ullamcorper varius. Nunc dignissim lacus in porta pulvinar. Nunc lectus enim, venenatis vitae dolor laoreet, dignissim aliquam purus. Vestibulum varius eleifend justo, et ultricies lacus. Nam vestibulum orci sed commodo blandit. Suspendisse nec nisi tincidunt, commodo metus non, interdum ante. Phasellus in dignissim dolor, vel vehicula leo. Vivamus dignissim tellus sit amet nunc scelerisque sodales.</p>
			</div>	
		</div>
		
		<div class="col-xl-6 col-12">
			<div class="col-10 mx-auto index">
				<img src="https://images.pexels.com/photos/1184580/pexels-photo-1184580.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="img-fluid">
			</div>
			<div class="box mx-auto green"></div>
		</div>	
		</div>
	</div> <!--STATIQUE-->
            
            <!-- SLIDER-->
            <section id="slider" class="container-fluid">
            
			<div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">					
             <?php 
               $number = 0;
            ?>
            <ol class="carousel-indicators">

                <?php query_posts('category_name=slider');
                while(have_posts()): the_post(); ?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $number++; ?>"></li>
                  <?php endwhile; ?>
            </ol>

            <div class="carousel-inner ">

                <?php query_posts('category_name=slider');
                     while ( have_posts() ) : the_post(); ?>
                <div class="carousel-item">

                <a href="<?php echo get_permalink(); ?>">
                  <?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' );?>
            <div class="carousel-caption d-none d-sm-block">
                <h5><?php the_title(); ?></h5>
                <p><?php //the_excerpt(); ?></p>
                <!--<p> <?php 
            foreach((get_the_category()) as $cat) { 
            echo $cat->cat_name . ' '; 
            } ?> </p>-->
              </div>
                    </a>

                </div>
              <?php endwhile;
                wp_reset_query();?>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              </div>
              </div>
            </section>
				
				<!-- /SLIDER -->
				<section class="container pt-5">
				<div class="row filter text-center p-3">
					<div id="accueil" class="button col-12 col-md-6 col-xl-1 mt-md-0 mt-2 tri p-2 active" data-filter="article"><a>Tout</a></div>
					<div id="art" class="button col-12 col-md-6 col-xl-2 mt-md-0 mt-2 tri p-2" data-filter="arts-appliques"><a>Arts appliqués</a></div>
					<div id="eco" class="button col-12 col-md-6 col-xl-2 mt-md-0 mt-2 tri p-2" data-filter="economique-cooremans"><a>Economie</a></div>
					<div id="para" class="button col-12 col-md-6 col-xl-2 mt-md-0 mt-2 tri p-2" data-filter="paramedical"><a>Paramédicale</a></div>
					<div  id="peda" class="button col-12 col-md-6 col-xl-2 mt-md-0 mt-2 tri p-2" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
					<div id="social" class="button col-12 col-md-6 col-xl-1 mt-md-0 mt-2 tri p-2" data-filter="social-cooremans"><a>Social</a></div>
					<div id="tech" class="button col-12 col-md-6 col-xl-2 mt-md-0 mt-2 tri p-2" data-filter="technique"><a>Technique</a></div>
				</div>
				</section>


			<!-- ct-news start -->
			<div class="container four ct-events">
				<h2 class="soustitre pt-5 pb-5 evenementtxt">Événements de toutes les sections</h2>
			<div class="row">

			<?php 

  			 query_posts('category_name=Événement');

			get_template_part('loopevent'); ?>

			</div>		
			</div>

			<!-- ct-news End -->

			<!-- ct-events start -->
			<div class="container four ct-news">
				<h2 class="soustitre pt-3 pb-3 actualitetxt">Actualités de toutes les sections</h2>
			<div class="row">
			<?php 

  			 query_posts('category_name=Actualité');

			get_template_part('loopactu'); ?>
			</div>		
			</div>

			<!-- ct-events End -->

			<!-- ct-galerie start -->
			<div class="container four ct-galerie">
				<h2 class="soustitre pt-3 pb-5 galerietxt">Galeries de toutes les sections</h2>
			<div class="row">
			<?php 

  			 query_posts('category_name=Galerie');

			get_template_part('loopgalerie'); ?>

			</div>		
			</div>

			<!-- ct-galerie End -->

		</section>
		
		<!-- /section -->
	</main>
<?php get_footer(); ?>
