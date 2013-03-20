<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Cube One: Gallery Slide - Componentes Web - Asisco</title>
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
	    <h2 class="page-header">Cube One</h2>
		  <!-- Cube One -->
		  <script type="text/javascript" src="gallery/slide/asisco/cube_one/js/swfobject/swfobject.js"></script>
		  <script type="text/javascript">
				var flashvars = {};
				flashvars.xml = "gallery/slide/asisco/cube_one/config.xml";
				flashvars.font = "gallery/slide/asisco/cube_one/font.swf"; 
				var attributes = {};
				attributes.wmode = "transparent";
				attributes.id = "slider";
				swfobject.embedSWF("gallery/slide/asisco/cube_one/cu3er.swf", "cu3er-container", "960", "316", "9", "Galeria/Slider/I/cube_one/expressInstall.swf", flashvars, attributes);
		  </script>

		  <div class="header_text_bg">    
			  <div id="cu3er-container"> 
				<a href="http://www.adobe.com/go/getflashplayer"> 
					<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
					     alt="Get Adobe Flash player" /> 
				</a> 
			  </div>
		  </div>		
		  <!-- Fim Cube One -->		    
		  <p>
			<a href="gallery_slide-cube_one-only.html" target="_blank" class="btn btn-primary">Only</a>
			<a href="#" class="btn">Download</a> 
		  </p>
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
