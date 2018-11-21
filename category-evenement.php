<?php get_header(); ?>

	<main role="main">
<div class="row pt-3">
				<section class="container mt-5 pt-5">
				<div class="row filter text-center p-3">
					<div id="accueil" class="button col-12 col-md-1 mt-md-0 mt-2 tri p-2 active" data-filter="article"><a>Tout</a></div>
					<div id="art" class="button col-12 col-md-2 mt-md-0 mt-2 tri p-2" data-filter="arts-appliques"><a>Arts appliqués</a></div>
					<div id="eco" class="button col-12 col-md-2 mt-md-0 mt-2 tri p-2" data-filter="economique-cooremans"><a>Economie</a></div>
					<div id="para" class="button col-12 col-md-2 mt-md-0 mt-2 tri p-2" data-filter="paramedical"><a>Paramédicale</a></div>
					<div  id="peda" class="button col-12 col-md-2 mt-md-0 mt-2 tri p-2" data-filter="pedagogique-bulls"><a>Pédagogique</a></div>
					<div id="social" class="button col-12 col-md-1 mt-md-0 mt-2 tri p-2" data-filter="social-cooremans"><a>Social</a></div>
					<div id="tech" class="button col-12 col-md-2 mt-md-0 mt-2 tri p-2" data-filter="technique"><a>Technique</a></div>
				</div>
				</section>
		
			<!-- ct-events start -->
			<div class="container all ct-events">
				<h2 class="soustitre pt-5 pb-5">Événement</h2>
			<div class="row">

			<?php 

  			 query_posts('category_name=Événement');

			get_template_part('loopevent'); ?>

			</div>		
			</div>
		</div>

			<!-- ct-events End -->
	</main>

<?php get_footer(); ?>
