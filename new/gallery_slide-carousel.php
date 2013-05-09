<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Carousel: Gallery Slide - Componentes Web - Asisco</title>
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
	    <h2 class="page-header">Carousel</h2>	
	</div>
	
	  <!-- Componente -->		  
		<link rel="stylesheet" href="gallery/slide/asisco/carousel/css/carousel.css" type="text/css" media="screen" /> 
		<script type="text/javascript" src="gallery/slide/asisco/carousel/js/jquery.v1.4.2.js"></script>
		<script type="text/javascript" src="gallery/slide/asisco/carousel/js/zoomslide.js"></script>
		<script type="text/javascript"> 
		$(function(){
			$('#carousel').infiniteCarousel({
				displayTime: 3000, // number of ms before next slide (3000 = 3 seconds)
				transitionSpeed: 250,
				textholderHeight : .25,	
				displayThumbnailBackground: 0,
				displayProgressBar : 1
			});
		});
		</script>			  		  
	  
		<div id="carousel-wrapper"></div>
		<!--HIDES THE SCROLLBAR-->
		<div id="nobar" style="background-color: #1C1C1C;">
		  <!--Center section of carousel displaying main item-->
		  <div id="carousel-holder">
			<div id="carousel">
			  <ul>
				<!-- If user wants to pull posts from a category for the slider do this stuff -->
				<li> <img src="gallery/slide/asisco/carousel/images/simple_img_1.jpg" width="960" height="400" alt="simple_img"/></li>
				<li> <img src="gallery/slide/asisco/carousel/images/simple_img_2.jpg" width="960" height="400" alt="simple_img"/></li>
				<li> <img src="gallery/slide/asisco/carousel/images/simple_img_3.jpg" width="960" height="400" alt="simple_img"/></li>
				<li> <img src="gallery/slide/asisco/carousel/images/simple_img_4.jpg" width="960" height="400" alt="simple_img"/></li>
				<li> <img src="gallery/slide/asisco/carousel/images/simple_img_5.jpg" width="960" height="400" alt="simple_img"/></li>
				<!-- If user wants to define specific content in the slider do this stuff -->
			  </ul>          
			</div>
		  </div>
		</div>		  
	  <!-- Fim Componente -->	

	<div class="container">
		<br/>		
		<p>
		   <a href="gallery_slide-carousel-only.html" target="_blank" class="btn btn-primary">Only</a>
		   <a href="https://github.com/componentesweb/gallery_slide-carousel.git" class="btn" target="_blank">Download (Git)</a> 
		</p>	
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
