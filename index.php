<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
				<div class="background"> <!--STATIQUE-->
	<div class="center">
	<h1>Bienvenue aux<br><span>Alumni Ferrer</span></h1>
	</div>
	</div>
	
	<div class="container-fluid">
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
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu convallis risus. Morbi quis est orci. Etiam commodo ullamcorper varius. Nunc dignissim lacus in porta pulvinar. Nunc lectus enim, venenatis vitae dolor laoreet, dignissim aliquam purus. Vestibulum varius eleifend justo, et ultricies lacus. Nam vestibulum orci sed commodo blandit. Suspendisse nec nisi tincidunt, commodo metus non, interdum ante. Phasellus in dignissim dolor, vel vehicula leo. Vivamus dignissim tellus sit amet nunc scelerisque sodales. Integer pharetra suscipit ultrices. Suspendisse tincidunt volutpat augue, elementum lobortis diam tincidunt sed. Suspendisse aliquam sapien mi, sit amet vehicula dolor posuere et.</p>
		</div>
		</div>	
		</div>
		<div class="row align-items-center mt-5 p-0 m-0">
		<div class="col-xl-6 col-12 text-right">
			<div class="col-10 mx-auto">
		<h2 class="pb-3">Dolor sit amet</h2>	
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu convallis risus. Morbi quis est orci. Etiam commodo ullamcorper varius. Nunc dignissim lacus in porta pulvinar. Nunc lectus enim, venenatis vitae dolor laoreet, dignissim aliquam purus. Vestibulum varius eleifend justo, et ultricies lacus. Nam vestibulum orci sed commodo blandit. Suspendisse nec nisi tincidunt, commodo metus non, interdum ante. Phasellus in dignissim dolor, vel vehicula leo. Vivamus dignissim tellus sit amet nunc scelerisque sodales. Integer pharetra suscipit ultrices. Suspendisse tincidunt volutpat augue, elementum lobortis diam tincidunt sed. Suspendisse aliquam sapien mi, sit amet vehicula dolor posuere et.</p>
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

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
			
			<div class="container">
			<div class="row">
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			</div>		
			</div>
		</section>
		
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
