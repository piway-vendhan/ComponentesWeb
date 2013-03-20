<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Showcase: Gallery Slide - Componentes Web - Asisco</title>
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
	    <h2 class="page-header">Showcase</h2>
		<!-- Componentes -->
		<script src="gallery/slide/asisco/meedel/jquery-1.7.2.min.js"></script>

		<link rel="stylesheet" href="gallery/slide/asisco/meedel/show_case_17/css/showcase.css" />
		<script type="text/javascript" src="gallery/slide/asisco/meedel/show_case_17/js/jquery.aw-showcase.js"></script>
		<script type="text/javascript">
		$(function(){
			
			$(document).ready(function() {
			var rwidth=$(this).width();
			 if(rwidth >959)
			 {
				<!-- DC Showcase Slider Settings -->
				$("#showcase").awShowcase(
				{
				content_width:			798, // width of slider
				content_height:			400, // height of slider
				fit_to_parent:			false,
				auto:					true, // auto play slider on load
				interval:				3000, // interval between slides (3000 = 3 seconds)
				continuous:				true,
				loading:				true,
				tooltip_width:			200, // tooltip width
				tooltip_icon_width:		32,
				tooltip_icon_height:	32,
				tooltip_offsetx:		18,
				tooltip_offsety:		0,
				arrows:					true, // show side left/right arrow buttons
				buttons:				true, // show pagination bullets below slider
				btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
				keybord_keys:			true, // enable keyboard keys (left/right)
				mousetrace:				false, /* Trace x and y coordinates for the mouse */
				pauseonover:			true, // pause slide on hover
				stoponclick:			true,
				transition:				'vslide', /* hslide/vslide/fade */
				transition_delay:		300,
				transition_speed:		500,
				show_caption:			'onhover', /* onload/onhover/show */
				thumbnails:				true, // show thumbnails
				thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
				thumbnails_direction:	'vertical', /* vertical/horizontal */
				thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
				dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
				speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
				viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
			});
				<!-- DC Showcase Slider Settings -->
			}
			else if(rwidth >= 480 && rwidth <= 767)
			{
				$('#image1').attr('src','http://pimg.co/p/420x320/111/fff/img.png');
				$('#image2').attr('src','http://pimg.co/p/420x320/111/fff/img.png');
				$('#image3').attr('src','http://pimg.co/p/420x320/111/fff/img.png');
				$('#image4').attr('src','http://pimg.co/p/420x320/111/fff/img.png');
				$('#image5').attr('src','http://pimg.co/p/420x320/111/fff/img.png'); 
				$('#image6').attr('src','http://pimg.co/p/420x320/111/fff/img.png'); 
				$('#image7').attr('src','http://pimg.co/p/420x320/111/fff/img.png'); 
				<!-- DC Showcase Slider Settings -->
				$("#showcase").awShowcase(
				{
				content_width:			290, // width of slider
				content_height:			257, // height of slider
				fit_to_parent:			false,
				auto:					true, // auto play slider on load
				interval:				3000, // interval between slides (3000 = 3 seconds)
				continuous:				true,
				loading:				true,
				tooltip_width:			200, // tooltip width
				tooltip_icon_width:		32,
				tooltip_icon_height:	32,
				tooltip_offsetx:		18,
				tooltip_offsety:		0,
				arrows:					true, // show side left/right arrow buttons
				buttons:				true, // show pagination bullets below slider
				btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
				keybord_keys:			true, // enable keyboard keys (left/right)
				mousetrace:				false, /* Trace x and y coordinates for the mouse */
				pauseonover:			true, // pause slide on hover
				stoponclick:			true,
				transition:				'vslide', /* hslide/vslide/fade */
				transition_delay:		300,
				transition_speed:		500,
				show_caption:			'onhover', /* onload/onhover/show */
				thumbnails:				true, // show thumbnails
				thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
				thumbnails_direction:	'vertical', /* vertical/horizontal */
				thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
				dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
				speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
				viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
			});
				<!-- DC Showcase Slider Settings -->
				
			}
			else if(rwidth <= 479)
			{
				$('#image1').attr('src','http://pimg.co/p/300x270/111/fff/img.png');
				$('#image2').attr('src','http://pimg.co/p/300x270/111/fff/img.png');
				$('#image3').attr('src','http://pimg.co/p/300x270/111/fff/img.png');
				$('#image4').attr('src','http://pimg.co/p/300x270/111/fff/img.png');
				$('#image5').attr('src','http://pimg.co/p/300x270/111/fff/img.png'); 
				$('#image6').attr('src','http://pimg.co/p/300x270/111/fff/img.png'); 
				$('#image7').attr('src','http://pimg.co/p/300x270/111/fff/img.png'); 
				<!-- DC Showcase Slider Settings -->
				$("#showcase").awShowcase(
				{
				content_width:			170, // width of slider
				content_height:			150, // height of slider
				fit_to_parent:			false,
				auto:					true, // auto play slider on load
				interval:				3000, // interval between slides (3000 = 3 seconds)
				continuous:				true,
				loading:				true,
				tooltip_width:			200, // tooltip width
				tooltip_icon_width:		32,
				tooltip_icon_height:	32,
				tooltip_offsetx:		18,
				tooltip_offsety:		0,
				arrows:					true, // show side left/right arrow buttons
				buttons:				true, // show pagination bullets below slider
				btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
				keybord_keys:			true, // enable keyboard keys (left/right)
				mousetrace:				false, /* Trace x and y coordinates for the mouse */
				pauseonover:			true, // pause slide on hover
				stoponclick:			true,
				transition:				'vslide', /* hslide/vslide/fade */
				transition_delay:		300,
				transition_speed:		500,
				show_caption:			'onhover', /* onload/onhover/show */
				thumbnails:				true, // show thumbnails
				thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
				thumbnails_direction:	'vertical', /* vertical/horizontal */
				thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
				dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
				speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
				viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
			});
				<!-- DC Showcase Slider Settings -->
			
			}
			else if(rwidth >= 768 && rwidth <= 959)
			 {
				$('#image1').attr('src','http://pimg.co/p/668x370/111/fff/img.png');
				$('#image2').attr('src','http://pimg.co/p/668x370/111/fff/img.png');
				$('#image3').attr('src','http://pimg.co/p/668x370/111/fff/img.png');
				$('#image4').attr('src','http://pimg.co/p/668x370/111/fff/img.png');
				$('#image5').attr('src','http://pimg.co/p/668x370/111/fff/img.png'); 
				$('#image6').attr('src','http://pimg.co/p/668x370/111/fff/img.png'); 
				$('#image7').attr('src','http://pimg.co/p/668x370/111/fff/img.png'); 
				 <!-- DC Showcase Slider Settings -->
				$("#showcase").awShowcase(
				{
				content_width:			508, // width of slider
				content_height:			270, // height of slider
				fit_to_parent:			false,
				auto:					true, // auto play slider on load
				interval:				3000, // interval between slides (3000 = 3 seconds)
				continuous:				true,
				loading:				true,
				tooltip_width:			200, // tooltip width
				tooltip_icon_width:		32,
				tooltip_icon_height:	32,
				tooltip_offsetx:		18,
				tooltip_offsety:		0,
				arrows:					true, // show side left/right arrow buttons
				buttons:				true, // show pagination bullets below slider
				btn_numbers:			false, // make pagination bullets numbers instead (e.g. 1,2,3,4,5)
				keybord_keys:			true, // enable keyboard keys (left/right)
				mousetrace:				false, /* Trace x and y coordinates for the mouse */
				pauseonover:			true, // pause slide on hover
				stoponclick:			true,
				transition:				'vslide', /* hslide/vslide/fade */
				transition_delay:		300,
				transition_speed:		500,
				show_caption:			'onhover', /* onload/onhover/show */
				thumbnails:				true, // show thumbnails
				thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
				thumbnails_direction:	'vertical', /* vertical/horizontal */
				thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
				dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
				speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
				viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
			});
				<!-- DC Showcase Slider Settings -->
				
			}
			 });
		  
		});
		</script>		
		 

		<div class="slide_res">
		  <div class="slider_box">
				<div class="slider">
				<!--start slider code DC showcase Slider Start -->
			  <div id="showcase" class="showcase">
			
				<!-- local sample image: 
				<img src="dcodes/sliders/images/showcase/838x470-image.jpg" width="838" height="470" /> -->
					
					<!-- Slide 1 -->
					<div class="showcase-slide">
						<div class="showcase-content">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/840x470.jpg" id="image1" />
						</div>
			
						<div class="showcase-thumbnail">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/840x470.jpg" width="140" />
							<div class="showcase-thumbnail-caption">Stand-up Surf</div>
							<div class="showcase-thumbnail-cover"></div>
						</div> 	
			
						<!-- Showcase Tooltips -->
						<div class="showcase-tooltips">
							<!-- Each anchor in .showcase-tooltips represents a tooltip. The coords attribute represents the position of the tooltip. -->
							<a href="http://www.bing.com" coords="334,230" target="_blank">Tooltips (bing)!</a>
							<a href="http://www.asisco.com.br" coords="470,190" target="_blank">exemplo tooltip. Com link para outra pagina!</a>
			
							<!-- You can add multiple elements to the anchor-tag which are display in the tooltip. -->
							<a href="http://www.google.com" coords="256, 192" target="_blank">
								<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/google.jpg" width="200" />
								<span style="display: block; font-weight: bold; padding: 3px 0 3px 0; text-align: center;">Tooltip de exemplo com imagem com link para outra página.</span>
							</a>
			
						</div>
					</div> <!-- /showcase-slide -->
			
					<!-- Slide 2 -->
					<div class="showcase-slide">
						<div class="showcase-content">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/beautifull_850x440.jpg" id="image2" />
						</div>
						
						<div class="showcase-thumbnail">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/beautifull_850x440.jpg" width="140" />
							<div class="showcase-thumbnail-caption">Surfing Girl</div>
							<div class="showcase-thumbnail-cover"></div>
						</div>
						
						<div class="showcase-caption">
							<h2>Surfer girl in Fernando de Noronha</h2>
						</div>
			
					</div> <!-- /showcase-slide -->
					
					<!-- Slide 3 -->
					<div class="showcase-slide">
						<div class="showcase-content">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/family-sup-holiday-.jpg" id="image3" />
						</div>
						
						<div class="showcase-thumbnail">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/family-sup-holiday-.jpg" width="140" />
							<div class="showcase-thumbnail-caption">Stand-up...</div>
							<div class="showcase-thumbnail-cover"></div>
						</div>
						
						<div class="showcase-caption">
							<h2>Family Stand-up</h2>
						</div>
						
					</div> <!-- /showcase-slide -->
			
					<!-- Slide 4 -->
					<div class="showcase-slide">
						<div class="showcase-content">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/sup_fly_hrs_2.jpg" id="image4" />
						</div>
						
						<div class="showcase-thumbnail">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/sup_fly_hrs_2.jpg" width="140"/>
							<div class="showcase-thumbnail-content">Customize<br/> <b>this text!</b></div>
							<div class="showcase-thumbnail-cover"></div>
						</div>
			
						<div class="showcase-caption">
							<h2>Lovers surfer.</h2>
						</div>
			
					</div> <!-- /showcase-slide -->
					
					<!-- Slide 5 -->
					<div class="showcase-slide">
						<div class="showcase-content">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/surf-esporte-e-lazer-7.jpg" id="image5" />
						</div>
						
						<div class="showcase-thumbnail">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/surf-esporte-e-lazer-7.jpg" width="140"/>
							<div class="showcase-thumbnail-content">Maneuvers!</div>
							<div class="showcase-thumbnail-cover"></div>
						</div>
						
					</div> <!-- /showcase-slide -->
			
					<!-- Slide 6 -->
					<div class="showcase-slide">
						<div class="showcase-content">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/surf_photos_australia_main_2.jpg" id="image6" />
						</div>
						
						<div class="showcase-thumbnail">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/surf_photos_australia_main_2.jpg" width="140" />
							<div class="showcase-thumbnail-caption">Australia</div>
							<div class="showcase-thumbnail-cover"></div>
						</div>
			
					</div> <!-- /showcase-slide -->
					
					<!-- Slide 7 -->
					<div class="showcase-slide">
						<div class="showcase-content">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/surf_peter_la_caixa.jpg" id="image7" />
						</div>
						
						<div class="showcase-thumbnail">
							<img src="gallery/slide/asisco/meedel/show_case_17/images/slider/surf_peter_la_caixa.jpg" width="140" />
							<div class="showcase-thumbnail-caption">Tube</div>
							<div class="showcase-thumbnail-cover"></div>				
						</div>
			
					</div> <!-- /showcase-slide -->
				</div>
				<!--end slider code DC showcase Slider Start -->
				</div>
				<div class="clr"></div>
			  </div>
		  <div class="clr"></div>
		</div>
		<!-- fim Componentes -->
		
		  <br/>
		  <p>
			 <!--<a href="gallery_slide-showcase-only.html" class="btn btn-primary">Only</a>-->
			 <a href="#" class="btn">Download</a>
		  </p>			
		
	</div>
	
	<?php include 'footer.php'; ?>
	
	
</body>
</html>
