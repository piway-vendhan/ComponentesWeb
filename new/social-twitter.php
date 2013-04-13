<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Twitter: Social - Componentes Web - Asisco</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Componentes Web - Asisco.">
	<meta name="author" content="Diego Lirio">

	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php include 'style.php'; ?>
	
	<link href="bootstrap/bootswatch.css" rel="stylesheet"> 
	<link href="bootstrap/bootstrap-responsive.min.css" rel="stylesheet"> 
	<!--<link href="bootstrap/font-awesome.min.css" rel="stylesheet"> -->          	
	
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="bootstrap/bootswatch.js"></script>
	<script src="bootstrap/jquery.smooth-scroll.min.js"></script>
	
	<!--<link href="http://bootswatch.com/united/bootstrap.min.css" rel="stylesheet"> <!-- spacelab, united, readable, superhero
	<link href="bootstrap/Other/css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="http://bootswatch.com/default/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="http://bootswatch.com/css/font-awesome.min.css" rel="stylesheet">
	<link href="bootstrap/Other/css/bootswatch.css" rel="stylesheet">


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
	<script src="http://bootswatch.com/js/bootstrap.min.js"></script>
	<script src="http://bootswatch.com/js/bootswatch.js"></script>

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Satisfy">

	-->
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
		getHeader("Social");
	?>

	<br/><br/>
	


	<div class="container">
	    <h2 class="page-header">Twitter</h2>
		<!-- Componentes -->
			<div class="row">		
				<h4 class="text-error">Compartilhar esta pagina no twitter</h4>		
				<div class="span3">
					<p class="text-info">Nova guia</p>
					<a href="http://twitter.com/home?status=Componentes%20Web%20-%20Asisco:%20http://asisco.com.br" target="_blank">
						<img src="social/twitter_logo.png"/>
					</a>
				</div>
				<div class="span3">
					<p class="text-info">Nova janela</p>
					<a href="javascript:onclick(window.open('http://twitter.com/home?status=Componentes%20Web%20-%20Asisco:%20http://asisco.com.br', '', 'height=380, width=500, top=150, left=150, scrollbars=no, resizable=no'));">
						<img src="social/twitter_logo.png"/>
					</a>				
				</div>
			</div>
			<br/><br/><br/>
			<div class="row">		
				<p class="text-info">Compartilhar um link</p>
				<div class="span3">					
					<a href="https://twitter.com/share" 
					   class="twitter-share-button" 
					   data-via="asiscoweb	" 
					   data-size="large" 
					   data-related="diegolirio" 
					   data-hashtags="componentesweb">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
				<div class="span3">
					<a href="https://twitter.com/share" 
					   class="twitter-share-button" 
					   data-via="asiscoweb" 
					   data-related="diegolirio" 
					   data-count="none" 
					   data-hashtags="componentesweb">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
			<br/><br/><br/>
			<div class="row">
				<p class="text-info">Seguir</p>
				<div class="span3">
					<a href="https://twitter.com/asiscoweb" 
					   class="twitter-follow-button" 
					   data-show-count="false" 
					   data-lang="pt" 
					   data-size="large">Seguir @asiscoweb</a>
					   
					<script>!function(d,s,id){ 
						var js,fjs = d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
						if(!d.getElementById(id)) { 
							js = d.createElement(s);
							js.id = id;
							js.src = p+'://platform.twitter.com/widgets.js';
							fjs.parentNode.insertBefore(js,fjs);
						}}(document, 'script', 'twitter-wjs');
					</script>
				</div>
				<div class="span3">
					<a href="https://twitter.com/asiscoweb" class="twitter-follow-button" data-show-count="false" data-lang="pt" data-show-screen-name="false">Seguir @asiscoweb</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
			<br/><br/><br/>
			<div class="row">
				<p class="text-info">Marcador</p>
				<div class="span3">
					<a href="https://twitter.com/intent/tweet?button_hashtag=sistemaprime&text=Sistema%20de%20Informa%C3%A7%C3%A3o%20pela%20web..." class="twitter-hashtag-button" data-lang="pt" data-size="large" data-related="fabiano_goes,diegolirio" data-url="http://prime.asisco.com.br">Tweet #sistemaprime</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
				<div class="span3">
					<a href="https://twitter.com/intent/tweet?button_hashtag=sistemaprime" class="twitter-hashtag-button" data-lang="pt" data-related="fabiano_goes,diegolirio">Tweet #sistemaprime</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
			<br/><br/><br/>
			<div class="row">
				<p class="text-info">Mencao</p>
				<div class="span3">
					<a href="https://twitter.com/intent/tweet?screen_name=asiscoweb" class="twitter-mention-button" data-lang="pt" data-size="large" data-related="diegolirio,fabiano_goes">Tweet to @asiscoweb</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
				<div class="span3">
					<a href="https://twitter.com/intent/tweet?screen_name=asiscoweb&text=Muito%20bom%2C%20parab%C3%A9ns....." class="twitter-mention-button" data-lang="pt" data-related="diegolirio,fabiano_goes">Tweet to @asiscoweb</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
			</br>
			<a href"https://twitter.com/about/resources/buttons" target="_blank">https://twitter.com/about/resources/buttons</a>
				
		<!-- fim Componentes --> 
	</div>
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
