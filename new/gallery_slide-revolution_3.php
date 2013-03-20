<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Revolution: Gallery Slide - Componentes Web - Asisco</title>
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
	    <h2 class="page-header">Revolution</h2> 
		  <!-- Componente -->
					<script src="gallery/slide/asisco/wanda/jquery-1.7.2.min.js"></script>
					<link rel="stylesheet" type="text/css" href="gallery/slide/asisco/wanda/revolution_3/js/revolution/css/responsive.css" media="screen" />
					<link rel="stylesheet" type="text/css" href="gallery/slide/asisco/wanda/revolution_3/js/revolution/rs-plugin/css/settings.css" media="screen" />
					<script type="text/javascript" src="gallery/slide/asisco/wanda/revolution_3/js/revolution/rs-plugin/js/jquery.templateaccess.plugins.min.js"></script>
					<script type="text/javascript" src="gallery/slide/asisco/wanda/revolution_3/js/revolution/rs-plugin/js/jquery.templateaccess.revolution.js"></script>

					<script type="text/javascript">

					var tpj=jQuery;
					//tpj.noConflict();

					tpj(document).ready(function() {

						if (tpj.fn.cssOriginal!=undefined)
							tpj.fn.css = tpj.fn.cssOriginal;

						tpj('.rev_banner').revolution(
							{
								delay:6000,
								startheight:490,
								startwidth:890,

								hideThumbs:200,

								thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
								thumbHeight:50,
								thumbAmount:5,

								navigationType:"bullet",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
								navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
								navigationStyle:"navbar",				//round,square,navbar

								touchenabled:"on",						// Enable Swipe Function : on/off
								onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

								navOffsetHorizontal:0,
								navOffsetVertical:20,

								shadow:1,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
								fullWidth:"off",							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus

								stopLoop:"off"							// on == Stop loop at the last Slie,  off== Loop all the time.
							});

						});

					</script>
		 
					 <div class="rev_bannercontainer">
					  <div class="rev_banner">
						<ul>

						  <li data-transition="slidedown" data-slotamount="14"  data-masterspeed="300" data-delay="10000" data-thumb="js/revolution/images/thumbs/regular_thumb6.jpg"> 
							<img src="gallery/slide/asisco/wanda/revolution_3/images/4_0.jpg" />
							<div class="caption sft big_versatti_blue"  data-x="550" data-y="120" data-speed="300" data-start="1200" data-easing="easeOutExpo">Toyota Hilux</div>
							<div class="caption sft medium_versatti_blue"  data-x="550" data-y="167" data-speed="300" data-start="1300" data-easing="easeOutExpo">SRV 4X4 3.0</div>
							<div class="caption lfb medium_versatti_blue"  data-x="550" data-y="190" data-speed="300" data-start="1400" data-easing="easeOutExpo">Automatico 4P</div> 
							<div class="caption sfb" data-x="1" data-y="1" data-speed="300" data-start="200" data-easing="easeOutBack"><img src="http://versattimultimarcas.com.br/images/orange/versatti_logo.png"></div>
							<div class="caption sfb" data-x="550" data-y="220" data-speed="300" data-start="2500" data-easing="easeOutBack"><a class="btn btn-primary btn-small" style="color:#fff;" href="versatti_veiculos_detalhes_hilux_1.html">mais detalhes...</a></div>
						  </li>	
						  
						  <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="js/revolution/images/thumbs/regular_thumb3.jpg"> 
							<img src="gallery/slide/asisco/wanda/revolution_3/images/7_0.jpg"  >
							<div class="caption lfl big_versatti_blue"  data-x="40" data-y="50" data-speed="300" data-start="1200" data-easing="easeOutExpo" style="padding:9px;">Hyundai HB20</div>
							<div class="caption lfl medium_versatti_blue"  data-x="40" data-y="120" data-speed="300" data-start="1300" data-easing="easeOutExpo" style="padding:9px;">Comfort 1.0</div>
							<div class="caption lfl medium_versatti_blue"  data-x="40" data-y="155" data-speed="300" data-start="1400" data-easing="easeOutExpo" style="padding:9px;">Manul 4P</div>
							<div class="caption lfl big_versatti_orange"  data-x="40" data-y="190" data-speed="300" data-start="1400" data-easing="easeOutExpo" style="padding:9px;">Zero km !</div>
							<div class="caption sfb" data-x="40" data-y="250" data-speed="300" data-start="2500" data-easing="easeOutBack"><a class="btn btn-primary btn-small" style="color:#fff;" href="#">mais detalhes...</a></div>
						  </li>							  

						  <li data-transition="boxfade" data-slotamount="12"  data-masterspeed="300"  title="Volkswagem Crossfox" data-thumb="js/revolution/images/thumbs/regular_thumb2.jpg"> 
							<img src="gallery/slide/asisco/wanda/revolution_3/images/5_0.jpg"  />
							<div class="caption lft big_versatti_blue"  data-x="350" data-y="80" data-speed="900" data-start="1200" data-easing="easeOutBack">Kia Sorento</div>
							<div class="caption sfb medium_versatti_blue" style="padding:8px;"  data-x="350" data-y="120" data-speed="300" data-start="2200" data-easing="easeOutExpo">EX 16V 2.4 (S.356)</div>
							<div class="caption sfb medium_versatti_blue" style="padding:8px;"  data-x="350" data-y="150" data-speed="300" data-start="2400" data-easing="easeOutExpo">Automatico 4P</div>
							<div class="caption sfb" data-x="350" data-y="220" data-speed="300" data-start="2500" data-easing="easeOutBack"><a class="btn btn-primary btn-small" style="color:#fff;" href="#">mais detalhes...</a></div>
						  </li>					

						  <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="js/revolution/images/thumbs/regular_thumb3.jpg"> 
							<img src="gallery/slide/asisco/wanda/revolution_3/images/6_0.jpg"  >
							<div class="caption lfl big_versatti_orange"  data-x="40" data-y="50" data-speed="300" data-start="1200" data-easing="easeOutExpo" style="padding:9px;">Chevrolet Captiva</div>
							<div class="caption lfl medium_versatti_blue"  data-x="40" data-y="140" data-speed="300" data-start="1300" data-easing="easeOutExpo" style="padding:9px;">Sport V6 4x4 3.0</div>
							<div class="caption lfl medium_versatti_blue"  data-x="40" data-y="175" data-speed="300" data-start="1400" data-easing="easeOutExpo" style="padding:9px;">Automatico 4P</div>
							<div class="caption sfb" data-x="40" data-y="220" data-speed="300" data-start="2500" data-easing="easeOutBack"><a class="btn btn-primary btn-small" style="color:#fff;" href="#">mais detalhes...</a></div>
						  </li>						  

						  <li data-transition="boxfade" data-slotamount="12"  data-masterspeed="300"  title="Volkswagem Crossfox" data-thumb="js/revolution/images/thumbs/regular_thumb2.jpg"> 
							<img src="http://img0.icarros.com/dbimg/imgadicionalanuncio/2/12990641_1"  >
							<div class="caption lft big_versatti_blue"  data-x="350" data-y="80" data-speed="900" data-start="1200" data-easing="easeOutBack">Volkswagem Crossfox</div>
							<div class="caption sfb medium_versatti_blue" style="padding:8px;"  data-x="350" data-y="120" data-speed="300" data-start="2200" data-easing="easeOutExpo">VHT Flex</div>
							<div class="caption sfb medium_versatti_blue" style="padding:8px;"  data-x="350" data-y="150" data-speed="300" data-start="2400" data-easing="easeOutExpo">1.6 4P Manual</div>
							<div class="caption sfb" data-x="350" data-y="220" data-speed="300" data-start="2500" data-easing="easeOutBack"><a class="btn btn-primary btn-small" style="color:#fff;" href="#">mais detalhes...</a></div>
						  </li>		
						
						  <li data-transition="slidedown" data-slotamount="14"  data-masterspeed="300" data-delay="10000" data-thumb="js/revolution/images/thumbs/regular_thumb6.jpg"> 
							<img src="http://img0.icarros.com/dbimg/imgadicionalanuncio/2/14374551_1"  >
							<div class="caption sft big_versatti_blue"  data-x="550" data-y="120" data-speed="300" data-start="1200" data-easing="easeOutExpo">Hyundai ix35</div>
							<div class="caption sft medium_versatti_blue"  data-x="550" data-y="167" data-speed="300" data-start="1300" data-easing="easeOutExpo">GLS Flex</div>
							<div class="caption lfb medium_versatti_blue"  data-x="550" data-y="190" data-speed="300" data-start="1400" data-easing="easeOutExpo">2.0 4P Automático</div>
							<div class="caption sfb" data-x="1" data-y="1" data-speed="300" data-start="200" data-easing="easeOutBack"><img src="http://versattimultimarcas.com.br/images/orange/versatti_logo.png"></div>
							<div class="caption sfb" data-x="550" data-y="220" data-speed="300" data-start="2500" data-easing="easeOutBack"><a class="btn btn-primary btn-small" style="color:#fff;" href="#">mais detalhes...</a></div>
						  </li>		
						
							<!-- diferentes fontes: 
														very_big_white, 
														very_big_black,
														big_black,
														big_white,
														medium_grey,										
														small_text
							-->											

							<li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="js/revolution/images/thumbs/regular_thumb3.jpg"> 
							<img src="http://cogumelolouco.com/wp-content/uploads/2012/08/camaro-amarelo-fotos.jpg"  >
							<div class="caption lfl big_versatti_orange"  data-x="40" data-y="50" data-speed="300" data-start="1200" data-easing="easeOutExpo" style="padding:9px;">Chevrolet Camaro</div>
							<div class="caption lfl medium_versatti_blue"  data-x="40" data-y="140" data-speed="300" data-start="1300" data-easing="easeOutExpo" style="padding:9px;">LS Coupé V6 Gasolina</div>
							<div class="caption lfl medium_versatti_blue"  data-x="40" data-y="175" data-speed="300" data-start="1400" data-easing="easeOutExpo" style="padding:9px;">3.6 2P Automático</div>
							<div class="caption sfb" data-x="40" data-y="220" data-speed="300" data-start="2500" data-easing="easeOutBack"><a class="btn btn-primary btn-small" style="color:#fff;" href="#">mais detalhes...</a></div>
						  </li>		
						  
						  <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="js/revolution/images/thumbs/regular_thumb3.jpg"> 
								<img src="gallery/slide/asisco/wanda/revolution_3/images/versatti_back.png"  >
								<div class="caption sfb" data-x="10" data-y="5" data-speed="300" data-start="1200" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/_camaro.jpg">
								</div>						
								<div class="caption sfb" data-x="240" data-y="80" data-speed="300" data-start="2100" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/_audi.png">
								</div>												
								<div class="caption sfb" data-x="100" data-y="400" data-speed="300" data-start="3200" data-easing="easeOutBack">
									<img src="http://versattimultimarcas.com.br/images/orange/versatti_logo.png">
								</div>												
							  </li>		
							  
							  <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="js/revolution/images/thumbs/regular_thumb3.jpg"> 
								<img src="gallery/slide/asisco/wanda/revolution_3/images/versatti_back.png"  >
								<div class="caption sfb" data-x="0" data-y="0" data-speed="300" data-start="900" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/alfa.png" height="150" width="180" />
								</div>						
								<div class="caption sfb" data-x="160" data-y="0" data-speed="300" data-start="1200" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/chevrolet.png" height="150" width="180" />
								</div>												
								<div class="caption sfb" data-x="65" data-y="115" data-speed="65" data-start="1500" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/bmw.png" height="150" width="180" />
								</div>																					
								<div class="caption sfb" data-x="165" data-y="170" data-speed="65" data-start="2100" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/citroen.png" height="150" width="180" />
								</div>																				
								<div class="caption sfb" data-x="440" data-y="95	" data-speed="65" data-start="1000" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/ford.png" height="150" width="180" />
								</div>														
								<div class="caption sfb" data-x="420" data-y="5" data-speed="65" data-start="1300" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/fiat.png" height="150" width="180" />
								</div>																				
								<div class="caption sfb" data-x="280" data-y="90" data-speed="65" data-start="1600" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/honda.png" height="150" width="180" />
								</div>								
								<div class="caption sfb" data-x="1" data-y="360" data-speed="65" data-start="1900" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/hyundai.png" height="150" width="180" />
								</div>											
								<div class="caption sfb" data-x="0" data-y="210" data-speed="65" data-start="2200" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/mitsubishi.png" height="150" width="180" />
								</div>								
								<div class="caption sfb" data-x="570" data-y="2" data-speed="65" data-start="2500" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/peugeot.png" height="150" width="180" />
								</div>														
								<div class="caption sfb" data-x="330" data-y="260" data-speed="65" data-start="2800" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/volkswagem.png" height="150" width="180" />
								</div>														
								<div class="caption sfb" data-x="480" data-y="250" data-speed="65" data-start="3000" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/toyota.png" height="150" width="180" />
								</div>														
								<div class="caption sfb" data-x="585" data-y="150" data-speed="65" data-start="3300" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/volvo-logo.png" height="150" width="180" />
								</div>																	
								<div class="caption sfb" data-x="715" data-y="0" data-speed="65" data-start="2000" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/dodge.png" height="150" width="180" />
								</div>
								<div class="caption sfb" data-x="180" data-y="310" data-speed="65" data-start="2300" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/ferrari.png" height="150" width="180" />
								</div>						
								<div class="caption sfb" data-x="640" data-y="330" data-speed="65" data-start="2300" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/kia.png" height="150" width="180" />
								</div>												
								<div class="caption sfb" data-x="740" data-y="195" data-speed="65" data-start="2600" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/porshe.png" height="150" width="180" />
								</div>											
								<div class="caption sfb" data-x="440" data-y="390" data-speed="65" data-start="1800" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/audi.png" height="150" width="180" />
								</div>														
								<div class="caption sfb" data-x="700" data-y="430" data-speed="10" data-start="4500" data-easing="easeOutBack">
									<img src="gallery/slide/asisco/wanda/revolution_3/images/facebook_png.png"  />
								</div>										
							
						  </li>		
						</ul>
						<div class="tp-bannertimer"></div>
					  </div> <!-- /rev_banner -->
					</div> 			  
			      <!-- Fim Componente -->
				  
				  <br/>
				  <p>
					 <a href="gallery_slide-revolution_3-only.html" class="btn btn-primary">Only</a>
					 <a href="gallery_slide-revolution_3_2.php" class="btn">Ver outro exemplo</a>
					 <a href="#" class="btn">Download</a>
				  </p>	   		
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
