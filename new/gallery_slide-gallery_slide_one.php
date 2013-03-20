<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Gallery Slide One: Gallery Slide - Componentes Web</title>
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
	    <h2 class="page-header">Gallery Slide One</h2>
		  <!-- head -->
		  <link rel="stylesheet" type="text/css" href="gallery/slide/asisco/gallery_slide_one/gallery_slide.css" />
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		  <script type="text/javascript" src="gallery/slide/asisco/gallery_slide_one/script.js"></script>	
			  <!-- body --> 		
		  <div id="gallery_slide_one">	      
				<div id="slides_one">    
					<div class="slide">
						<!--<img src="img/carros/veloster_3.jpg" width="920" height="400" alt="side" />-->
						<img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3.jpg" alt="side" />
					</div>
					<div class="slide">
						<img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3_8.jpg" alt="side" />
					</div>
					<div class="slide">
						<img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3_9.jpg" alt="side" />
					</div>
					<div class="slide">
						<img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3_10.jpg" alt="side" />
					</div>      
				</div>
		 
				<div id="menu_slide">    
					<ul>
						<li class="fbar">&nbsp;</li>
						<li class="menuItem">
							<a href=""><img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3.jpg" alt="thumbnail" /></a>
						</li>
						<li class="menuItem">
							<a href=""><img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3_8.jpg" alt="thumbnail" /></a>
						</li>
						<li class="menuItem">
							<a href=""><img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3_9.jpg" alt="thumbnail"/></a>
						</li>
						<li class="menuItem">
							<a href=""><img src="gallery/slide/asisco/gallery_slide_one/img/carros/veloster_3_10.jpg" alt="thumbnail"/></a>
						</li>
					</ul>
				</div>    
		  </div>		
		  <!-- Fim Gallery Slide One. -->	
		
		<br/><br/>	
		<p>
		   <a href="gallery_slide-gallery_slide_one-only.html" target="_blank" class="btn btn-primary">Only</a>
		   <a href="#" class="btn">Download</a> 
		</p>	

		  
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
