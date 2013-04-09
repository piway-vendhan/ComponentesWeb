<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Lightbox Display: Gallery Lightbox - </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ubuntu orange and unique font.">
	<meta name="author" content="Thomas Park">

	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

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
		getHeader("Gallery Lightbox");
	?>

	<br/><br/>
	
	<div class="container">
	    <h2 class="page-header">Lightbox Display</h2>

		<!-- Asisco LightBox CSS -->
		<link rel="stylesheet" type="text/css" href="gallery/lightbox/asisco/lightbox_display/css/prettyPhoto.css" />
		<!-- jQuery Library (skip this step if already called on page ) -->
		<script type="text/javascript" src="gallery/lightbox/asisco/lightbox_display/js/jquery.min.js"></script> <!-- (do not call twice) -->
		<!-- v LightBox JS -->
		<script type="text/javascript" src="gallery/lightbox/asisco/lightbox_display/js/jquery.prettyPhoto.js"></script>
		<!-- Asisco LightBox Settings -->
		<script type="text/javascript">
		$(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				social_tools: false,
			});
		});
		</script>

		<h3>LightBox:Image</h3>
		<!-- Asisco LightBox:Image Start -->
		<!-- rel="prettyPhoto[1]" indicates image belongs to gallery 1, increment this number to separate images. -->
		<a href="http://cdn.dcodes.net/s/sak/2/800/600/c" rel="prettyPhoto[1]" title="Add description here (optional)"><img src="http://cdn.dcodes.net/s/sak/2/192/132/c" alt="Image Caption #1 (optional)" border="0" class="img_border_radius" /></a>
		<a href="http://cdn.dcodes.net/s/sak/3/800/600/c" rel="prettyPhoto[1]" title="Add description here (optional)"><img src="http://cdn.dcodes.net/s/sak/3/192/132/c" alt="Image Caption #2 (optional)" border="0" class="img_border_radius" /></a>
		<!-- Asisco LightBox:Image End -->

		<br/><br/><br/>


		<h3>LightBox:IFRAME</h3>
		<!-- Asisco LightBox:IFRAME Start -->
		<a href="http://www.asisco.com.br?iframe=true&width=750&height=500" rel="prettyPhoto[iframes]" title="Add description here (optional)">View Asisco.com.br Website</a>
		<br/>
		<a href="http://www.bing.com?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]" title="Add description here (optional)">View Bing Website</a> (set 100% width)
		<!-- Asisco LightBox:IFRAME End -->

		<br/><br/><br/>

		<h3>LightBox:Inline</h3>
		<!-- Asisco LightBox:Inline Start -->
			<a href="#inline-1" rel="prettyPhoto[inline]">View Inline Content</a>
			<div id="inline-1" style="display:none;">
				<h3>This content is placed in a local <DIV> layer.</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>
		<!-- Asisco LightBox:Inline End -->

		<br/><br/><br/>


		<h3>LightBox:YouTube</h3>
		<!-- Asisco LightBox:YouTube Start -->
		<a href="https://www.youtube.com/watch?v=65DQg5oY3ss" rel="prettyPhoto" title="Kelly Slater 11x World Champion">View YouTube Video Clip</a>
		<!-- Asisco LightBox:YouTube End -->

		<br/><br/><br/>

		<h3>LightBox:Vimeo</h3>
		<!-- Asisco LightBox:Vimeo Start -->
		<a href="http://vimeo.com/51510972" rel="prettyPhoto" title="Rip Curl Pro Portugal | the medina super show | free surf session 02">View Vimeo Video Clip</a>
		<!-- Asisco LightBox:Vimeo End -->

		<br/><br/><br/>

		<h3>LightBox:PDF</h3>
		<!-- Asisco LightBox:PDF Start -->
		<a href="http://docs.google.com/viewer?url=http://cdn.dcodes.net/sc-samples/sample.pdf&embedded=true?iframe=true&width=650&height=350" rel="prettyPhoto[iframes]" title="Add description here (optional)">View Adobe PDF File</a>
		<!-- Asisco LightBox:PDF End -->

		<br/><br/><br/>

		<h3>LightBox:Flash</h3>
		<!-- Asisco LightBox:Flash Start -->
		  <a href="http://cdn.dcodes.net/sc-samples/flash-test.swf?width=600&height=300" rel="prettyPhoto[flash]" title="Add caption here (optional)">View Flash Content</a>
		<!-- Asisco LightBox:Flash Start -->

		<br/><br/><br/>

		<h3>LightBox:QuickTime</h3>
		<!-- Asisco LightBox:QuickTime Start -->
		<a href="http://trailers.apple.com/movies/universal/despicableme/despicableme-tlr1_r640s.mov?width=640&height=360" rel="prettyPhoto" title="Add description here (optional)">View QuickTime Clip</a>
		<!-- Asisco LightBox:QuickTime End -->

		<br/><br/>
		
		<p>
		   <a href="gallery_lightbox-ligthbox_display-only.html" target="_blank" class="btn btn-primary">Only</a>
		   <a href="download/gallery_lightbox-ligthbox_display-only.zip" class="btn">Download</a> 
		</p>		
	    
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
