<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Slodorion: Gallery Slide - Componentes Web - Asisco</title>
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
	    <h2 class="page-header">Slodorion</h2>

		<!-- Slidorion -->	
		<script src="gallery/slide/asisco/meedel/jquery-1.7.2.min.js"></script>		
		<link rel="stylesheet" href="gallery/slide/asisco/meedel/slodorion_14/css/slidorion.css" />
		<script src="gallery/slide/asisco/meedel/slodorion_14/js/jquery.slidorion.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				
				$('#slidorion').slidorion();
				
				$('.effects').hide();
				$('.more-effects').click(function(e){
					$('.effects').slideToggle();
					e.preventDefault();
				});
			});
		</script>		
		
		<!-- html -->
		<div class="slide_res">
			<div class="slider_box">
				<!--start slider scripts DC Slidorion Slider Start -->
				<div style="margin:0 auto; padding:0; position:relative;"> <!-- define slider container width (strict enforce) -->
					<div id="slidorion">		
						<div id="slider_slidorion">			 
							<!-- Slide 1 -->
							<div class="slider-image" rel="section1">
								<img src="gallery/slide/asisco/meedel/slodorion_14/images/ipod-touch.jpg" width="680" height="400" />
							</div>
					
							<!-- Slide 2 -->
							<div class="slider-image" rel="section2">
								<img src="gallery/slide/asisco/meedel/slodorion_14/images/iphone5.jpg" width="680" height="400" />
							</div>
							
							<!-- Slide 3 -->
							<div class="slider-image" rel="section3">
								<img src="gallery/slide/asisco/meedel/slodorion_14/images/ipad4thgen.jpg" width="680" height="400" />
							</div>
						</div> <!-- /slider -->
				
						<div id="accordion">			
							<!-- Slide 1 -->
							<div class="header1"><a class="slider-link" rel="section1">IPod</a></div>
							<div id="content_slodorion_first" class="content_slodorion">
								<p>There thin and light. Then there thin and light on a whole new level. iPod touch now has a 
								superthin aluminum body that feels barely there in your hand or pocket. It comes in colors so fun, 
								its impossible to choose just one...</p>
								<a href="http://www.apple.com/ipod/" target="_blank">Read more</a>
							</div>
					
							<!-- Slide 2 -->
							<div class="header1"><a class="slider-link" rel="section2">IPhone</a></div>
							<div class="content_slodorion">
								<p>Sed rutrum cursus dui, eu porttitor augue rhoncus suscipit. Aenean eu diam pretium urna ultrices molestie. Donec faucibus eros id risus blandit congue. Quisque laoreet metus in mi aliquet a posuere felis porttitor.</p>
								<a href="http://www.apple.com/iphone/" target="_blank">Read more</a>
							</div>
							
							<!-- Slide 3 -->
							<div class="header1"><a class="slider-link" rel="section3">IPad</a></div>
							<div class="content_slodorion">
								<p>Duis eu faucibus justo. Donec arcu mauris, iaculis sollicitudin eleifend sed, sagittis eu elit. Sed rutrum rutrum vulputate. Nullam a nulla in elit pulvinar vulputate.</p>
								<a href="http://www.apple.com/ipad/" target="_blank">Read more</a>
							</div>			
						</div> <!-- /accordion -->
				 
					</div> <!-- /slidorion -->

				</div>
				<!--end slider scripts DC Slidorion Slider Start -->
				<div class="clr"></div>
			</div>
			<div class="clr"></div>
		</div>
		<!-- fim Slidorion -->		
		
		  <br/>
		  <p>
			 <!--<a href="gallery_slide-slodorion-only.html" class="btn btn-primary">Only</a>-->
			 <a href="#" class="btn">Download</a>
		  </p>			
		
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
