<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Facebook: Social - Componentes Web - Asisco</title>
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
	    <h2 class="page-header">Facebook</h2>
		<!-- Componentes -->
				<div class="row">
					<h4 class="text-info">Compartilhar esta pagina no facebook</h4>
					<div class="span3">
						Nova guia<br/>
						<a href="http://facebook.com/share.php?t=Componentes%20Web%20-%20Asisco&u=http://asisco.com.br" target="_blank">
							<img src="social/facebook_32.png"/>
						</a>
					</div>
					<div class="span3">
						Nova janela<br/>
						<a href="javascript:onclick(window.open('http://facebook.com/share.php?t=Componentes%20Web%20-%20Asisco&u=http://asisco.com.br', '', 'height=380, width=500, top=150, left=300, scrollbars=no, resizable=no'));">
							<img src="social/facebook_32.png"/>
						</a>				
					</div>
					<div class="span3">
						Nova janela<br/>
						<a href="http://facebook.com/share.php?t=Componentes%20Web%20-%20Asisco&u=http://asisco.com.br" onclick="window.open(this.href, 'Compartilhar no facebook', 'height=380, width=500, top=150, left=250, scrollbars=no, resizable=no');return false">
							<img src="social/facebook_32.png"/>
						</a>				
					</div>					
				</div>
				
		<!-- fim Componentes -->
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
