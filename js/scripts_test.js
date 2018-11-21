(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
})(jQuery, this);


jQuery(document).ready(function($){
	
	
	
	
/* CAROUSEL */
	// mettre une classe active sur le premier élément du Carousel sinon il ne fonctionne pas
	$(".carousel-item").first().addClass("active");
	$(".carousel-indicators li").first().addClass("active");

});



/*   FILTRE NEWS   */

$('.button, .button2').css("cursor","pointer");


	$('.four.ct-news .article, .four.ct-events .article, .four.ct-galerie .article').hide();

	$(".four.ct-news .article").slice(0, 4).show();
	$(".four.ct-events .article").slice(0, 4).show();
	$(".four.ct-galerie .article").slice(0, 4).show();

	


	$(".button").click(function(){
				$(".button").removeClass("active");
		$(this).addClass("active");
		
		var value = $(this).attr("data-filter");
		//console.log(value);

			if (value == "article")
		{
			
						$(".four.ct-news .article, .four.ct-events .article, .four.ct-galerie .article").hide();
	
			
			$(".four.ct-news .article").slice(0, 4).fadeIn("1000");
			$(".four.ct-events .article").slice(0, 4).fadeIn("1000");
			$(".four.ct-galerie .article").slice(0, 4).fadeIn("1000");
		}
		else{
			$(".article").not("."+value).hide();

			$(".four.ct-news .article").filter("."+value).slice(0, 4).fadeIn("1000");
			$(".four.ct-events .article").filter("."+value).slice(0, 4).fadeIn("1000");
			$(".four.ct-galerie .article").filter("."+value).slice(0, 4).fadeIn("1000");
			
		}


		
		}); // click .button
		
		
		
			$(".button2").click(function(){
		
		var value = $(this).attr("data-filter");
		//console.log(value);

			if (value == "article")
		{
			
			$(".article").hide();
	
			
			//$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").fadeIn("5000");
			//$(this).filter("."+value).removeClass("active");
			$(".ct-news .article").slice(0, 6).fadeIn("1000");
			$(".ct-events .article").slice(0, 6).fadeIn("1000");
			$(".ct-galerie .article").slice(0, 6).fadeIn("1000");
		}
		else{
			$(".article").not("."+value).hide();
			//$(".article").fadeOut("5000");
			
			//$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").filter("."+value).fadeIn("5000");
			//$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).fadeOut().slice(0, 3).fadeIn();
			//$(".ct-news .article, .ct-events .article, .ct-galerie .article").filter("."+value).slice(4, 100).hide();
			
			//$(this).filter("."+value).addClass("active");
			
			
			//$(".article").filter("."+value).fadeIn("5000");
			$(".ct-news .article").filter("."+value).slice(0, 6).fadeIn("1000");
			$(".ct-events .article").filter("."+value).slice(0, 6).fadeIn("1000");
			$(".ct-galerie .article").filter("."+value).slice(0, 6).fadeIn("1000");
			
		}
				
				
				


		
		}); // click .button

				$(".button").click(function(){
		$(".button").removeClass("active");
		$(this).addClass("active");
		
		var value = $(this).attr("data-filter");
		//console.log(value);

			if (value == "article")
		{
			
			$(".all.ct-news .article, .all.ct-events .article, .all.ct-galerie .article").hide();
	
			
			$(".all.ct-news .article").fadeIn("1000");
			$(".all.ct-events .article").fadeIn("1000");
			$(".all.ct-galerie .article").fadeIn("1000");
		}
		else{
			$(".article").not("."+value).hide();

			$(".all.ct-news .article").filter("."+value).fadeIn("1000");
			$(".all.ct-events .article").filter("."+value).fadeIn("1000");
			$(".all.ct-galerie .article").filter("."+value).fadeIn("1000");
			
		}


		
		}); // click .button
		
		

$( ".article" ).mouseenter(function() {
 $( this ).animate( {
  top: "-=10px"
  
  } );
});

$( ".article" ).mouseleave(function() {
 $( this ).animate( {
  top: "+=10px"
  
  } );
});


/*   CHANGEMENT NOM SOUSTITRE   */

$(".button").click(function(){
   		 var value = $(this).attr("data-filter");
   		 
    if (value == "article")
   	 
   	 {
   		 $(".evenementtxt").text("Événements de toute les sections");
   		 $(".actualitetxt").text("Actualités de toute les sections");
   		 $(".galerietxt").text("Galeries de toute les sections");
   		 
   	 }
    
    else if (value == "economique-cooremans")
   	 
   	 {
   		 $(".evenementtxt").text('Événements économie');
   		 $(".actualitetxt").text("Actualités économie");
   		 $(".galerietxt").text("Galeries économie");
   		 
   	 }
    
    else if (value == "pedagogique-bulls")
   	 
   	 {
   		 $(".evenementtxt").text("Événements pédagogique");
   		 $(".actualitetxt").text("Actualités pédagogique");
   		 $(".galerietxt").text("Galeries pédagogique");
   		 
   	 }
    
    else if (value == "social-cooremans")
   	 
   	 {
   		 $(".evenementtxt").text("Événements social");
   		 $(".actualitetxt").text("Actualités social");
   		 $(".galerietxt").text("Galeries social");
   		 
   	 }
    
    else{
   		 $(".evenementtxt").text("Événements "+value);
   		 $(".actualitetxt").text("Actualités "+value);
   		 $(".galerietxt").text("Galeries "+value);
   	 }
   		 
   	 });


