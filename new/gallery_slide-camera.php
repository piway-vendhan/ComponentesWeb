<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Camera: Gallery Slide - Componentes Web - Asisco</title>
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
	    <h2 class="page-header">Camera</h2>
		<!-- Camera -->	
		<script src="gallery/slide/asisco/meedel/jquery-1.7.2.min.js"></script>
		
		<!-- slides START -->
		<!-- Start slider DC Camera Slider CSS -->
		<link rel="stylesheet" id="camera-css"  href="gallery/slide/asisco/meedel/camera_1/css/camera.css" type="text/css" media="all">
		<!-- DC Camera Slider JS -->
		<script type="text/javascript" src="gallery/slide/asisco/meedel/camera_1/js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="gallery/slide/asisco/meedel/camera_1/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="gallery/slide/asisco/meedel/camera_1/js/camera.min.js"></script>
		<script type="text/javascript">
			jQuery(function(){		 
				jQuery('#camera_wrap_1').camera({
					thumbnails: true, 
					height: '400px',
					loader: 'pie', // bar,pie
					pieDiameter: 38,
					piePosition: "rightTop",               
					time: 1500, // ms (1500 = 1.5 seconds)
					pagination: true               
				});
			});
		</script>
		<!--end slider DC Camera Slider Settings -->
		<!-- slides END -->

		
		<div class="slide_res">
			<div class="slider_box">
				<!--Start slider DC Camera Slider Start -->    
				<div style="width:100%; margin:0 auto; padding:0px; position:relative; right:0px;"> <!-- define slider container width (strict enforce) -->
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_1"> 				
							<!-- Slide 1 --> 
							<!-- sample local image:
							<di data-thumb="sliders/camera/images/100x75-thumb.jpg" data-src="sliders/camera/images/1280x800-image.jpg"> -->
					
							<div data-thumb="gallery/slide/asisco/meedel/camera_1/images/980x400.crop.jpg" data-src="gallery/slide/asisco/meedel/camera_1/images/broadcast980X400.jpg">
							  <div class="camera_caption fadeFromBottom"> Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em> </div>
							</div>
					
							<!-- Slide 2 -->
							<div data-thumb="gallery/slide/asisco/meedel/camera_1/images/980x400.crop.jpg" data-src="gallery/slide/asisco/meedel/camera_1/images/980x400.crop.jpg">
							  <div class="camera_caption fadeFromBottom"> It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em> </div>
							</div>
					
							<!-- Slide 3 -->
							<div data-thumb="gallery/slide/asisco/meedel/camera_1/images/980x400.crop.jpg" data-src="gallery/slide/asisco/meedel/camera_1/images/Puzzle980x400.jpg">
							  <div class="camera_caption fadeFromBottom"> Camera slideshow provides many options <em>to customize your project</em> as more as possible </div>
							</div>
					
							<!-- Slide 4 -->
							<div data-thumb="gallery/slide/asisco/meedel/camera_1/images/980x400.crop.jpg" data-src="gallery/slide/asisco/meedel/camera_1/images/technology980x400.jpg">
							  <div class="camera_caption fadeFromBottom"> Different color skins and layouts available, <em>fullscreen ready too</em> </div>
							  <div style="position:absolute; top:80%; right:5%; background:#333; color:#fff; padding:5px; width:35%;" class="fadeIn camera_effected">This is an HTML element included in the transition effect</div>
							</div>
							
							<!-- Slide 5 -->
							<div data-thumb="gallery/slide/asisco/meedel/camera_1/images/980x400.crop.jpg" data-src="gallery/slide/asisco/meedel/camera_1/images/webdesign-interativo-980x400.png">
							  <div class="camera_caption fadeFromBottom"> Different color skins and layouts available, <em>fullscreen ready too</em> </div>
							  <div style="position:absolute; top:80%; right:5%; background:#333; color:#fff; padding:5px; width:35%;" class="fadeIn camera_effected">This is an HTML element included in the transition effect</div>
							</div>						
					</div>
					<!-- /camera_wrap --> 
				</div>    
				<!--end slider DC Camera Slider End -->

				<div class="clr"></div>
			</div>
			<div class="clr"></div>
		</div>
		<!-- Fim Camera -->	 
		
		<p>
		   <a href="gallery_slide-camera-only.html" target="_blank" class="btn btn-primary">Only</a>
		   <a href="#" class="btn">Download</a> 
		</p>		
		
	    
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
