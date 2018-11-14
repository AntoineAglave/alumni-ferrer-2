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
		<div class="row align-items-center mt-5">
		<div class="col-xl-6 col-12">
			<div class="col-10 mx-auto index">	
				<img alt="left" src="accomplishment-achievement-education-1139319.jpg" class="img-fluid">
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
		<div class="row align-items-center mt-5">
		<div class="col-xl-6 col-12 text-right">
			<div class="col-10 mx-auto">
		<h2 class="pb-3">Dolor sit amet</h2>	
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu convallis risus. Morbi quis est orci. Etiam commodo ullamcorper varius. Nunc dignissim lacus in porta pulvinar. Nunc lectus enim, venenatis vitae dolor laoreet, dignissim aliquam purus. Vestibulum varius eleifend justo, et ultricies lacus. Nam vestibulum orci sed commodo blandit. Suspendisse nec nisi tincidunt, commodo metus non, interdum ante. Phasellus in dignissim dolor, vel vehicula leo. Vivamus dignissim tellus sit amet nunc scelerisque sodales. Integer pharetra suscipit ultrices. Suspendisse tincidunt volutpat augue, elementum lobortis diam tincidunt sed. Suspendisse aliquam sapien mi, sit amet vehicula dolor posuere et.</p>
			</div>	
		</div>
		
		<div class="col-xl-6 col-12">
			<div class="col-10 mx-auto index">
				<img src="accomplishment-achievement-caps-1184580.jpg" class="img-fluid">
			</div>
			<div class="box mx-auto green"></div>
		</div>	
		</div>
	</div> <!--STATIQUE-->

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
