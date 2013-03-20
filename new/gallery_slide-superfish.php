<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Superfish: Gallery Slide - Componentes Web - Asisco</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ubuntu orange and unique font.">
	<meta name="author" content="Thomas Park">

	<?php include 'style.php'; ?>
	
	<link href="bootstrap/bootswatch.css" rel="stylesheet"> 
	<link href="bootstrap/bootstrap-responsive.min.css" rel="stylesheet">        	
	
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="bootstrap/bootswatch.js"></script>
	<script src="bootstrap/jquery.smooth-scroll.min.js"></script>

	<script type="text/javascript">
	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-23019901-1']);
	  _gaq.push(['_setDomainName', "bootswatch.com"]);
		_gaq.push(['_setAllowLinker', true]);
	  _gaq.push(['_trackPageview']);

	 (function() {
	   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	 })();

	</script>
</head>
<!-- class="index" id="top" -->
<body data-spy="scroll" data-target=".bs-docs-sidebar"> 

	<?php 
		include 'header.php'; 
		getHeader("Gallery Slide");
	?>

	<br/><br/>
	
	<div class="container">
	    <h2 class="page-header">Superfish</h2>
			<br/><br/>
			<!-- Slide -->	
				<script src="gallery/slide/asisco/wanda/jquery-1.7.2.min.js"></script>	

				<script  src="gallery/slide/asisco/wanda/superfish_17/superfish/js/superfish-1.4.8/js/hoverIntent.js"></script>
				<script  src="gallery/slide/asisco/wanda/superfish_17/superfish/js/superfish-1.4.8/js/superfish.js"></script>
				<script  src="gallery/slide/asisco/wanda/superfish_17/superfish/js/superfish-1.4.8/js/supersubs.js"></script>

				<!--<script type="text/javascript" src="gallery/slide/asisco/wanda/js/jquery.tinycarousel.min.js"></script>-->
				<script type="text/javascript">
					$(document).ready(function(){
						$('#slider1').tinycarousel();
					});
				</script>
			<!-- END slider1 -->

				<script type="text/javascript">
					
					$(window).load(function(){
					// Thumbnail Carousel
					$('#flex_carousel').flexslider({
					animation: "slide",
					controlNav: true,								// Create navigation for paging control of each clide? Note: Leave true for manualControls usage
					animationLoop: true,						// Should the animation loop? If false, directionNav will received "disable" classes at either end
					slideshow: false,								// Animate slider automatically
					startAt: 0,                     // The slide that the slider should start on. Array notation (0 = first slide)
					touch: true,                    // Allow touch swipe navigation of the slider on touch-enabled devices
					video: false,                   // if using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches        
					itemWidth: 140,									// Box-model width of individual carousel items, including horizontal borders and padding.
					itemMargin: 5,									// Margin between carousel items.
					asNavFor: '#f_slider'						// Internal property exposed for turning the slider into a thumbnail navigation for another slider
					});
					
					$('#f_slider').flexslider({
						// Banner Slider
					animation: "slide",
					controlNav: false,						 // Create navigation for paging control of each clide? Note: Leave true for manualControls usage
					animationLoop: false,					 // Should the animation loop? If false, directionNav will received "disable" classes at either end
					slideshow: true,               // Animate slider automatically
					slideshowSpeed: 4000,          // Set the speed of the slideshow cycling, in milliseconds
					animationSpeed: 600,           // Set the speed of animations, in milliseconds        
					smoothHeight: true,            // Allow height of the slider to animate smoothly in horizontal mode
					sync: "#flex_carousel",				 // Mirror the actions performed on this slider with another slider. Use with care.
					start: function(slider){
					$('body').removeClass('loading');
					}
					});
					});
				</script>			

					
            				<div class="dtcodes_main">
									<a name="dcodes-flex-slider" id="dcodes-flex-slider"></a>						
										
									<link rel="stylesheet" href="gallery/slide/asisco/wanda/superfish_17/css/flex/flexslider.css" type="text/css" />
									<script defer src="gallery/slide/asisco/wanda/superfish_17/js/flex/jquery.flexslider.js"></script> 
	
									<div id="dc_flex_container" role="dc_flex_container">
											<section class="f_slider">
												<div id="f_slider" class="flexslider">
													<ul class="fslides">
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_0.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_1.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_2.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_3.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_4.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_5.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_6.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_7.jpg" /></li>
													</ul>
												</div>
												<div id="flex_carousel" class="flexslider">
													<ul class="fslides">
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_0.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_1.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_2.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_3.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_4.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_5.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_6.jpg" /></li>
														<li><img src="gallery/slide/asisco/wanda/superfish_17/images/carros/4_7.jpg" /></li>
													</ul>
												</div>
											</section>
									</div>
										
										
									
								</div>
					<!-- Fim Slide -->    
					
				<br/>		
				<p>
				   <a href="gallery_slide-superfish-only.html" target="_blank" class="btn btn-primary">Only</a>
				   <a href="#" class="btn">Download</a> 
				</p>						
					
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
