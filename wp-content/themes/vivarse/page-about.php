<?php get_header(); ?>
	
<main id="main" class="site-main">

	<?php get_sidebar(); ?>	
	<article class="section">
		<img class="backgr" src="<?php the_field('ozavodu-slika1'); ?>" alt="Fotografija predstavitev">
		<div class="text-tile">
			<?php the_field('ozavodu-predstavitev'); ?>
		</div>
	</article>	

	<article style="background-color: black;" class="section">
		<video class="htmlvideo" controls>
		<source src="http://video.webmfiles.org/elephants-dream.webm" type="video/webm">
		Your browser does not support the video tag.
		</video>
	</article>

	<article class="section">
		<div id="zemljevid-area">
			<img id="zemljevid" src="<?php bloginfo('template_url'); ?>/images/zemljevid.png"> 
			<img id="myImg1" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
			<img id="myImg2" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
			<img id="myImg3" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
			<img id="myImg4" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
			<img id="myImg5" src="<?php bloginfo('template_url'); ?>/images/sidebar-insta.png">
		</div> 
		<div id="myModal1" class="modal">
			<span id="close2" onclick="document.getElementById('myModal1').style.display='none'">&times;</span>
			<iframe class="modal-content"  src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ssl!2sus!4v1504112212072!6m8!1m7!1sCAoSLEFGMVFpcE5kNFlhLWRWM2JkS2ZLUUZpNHhrMkFZcVRPenBEZDFmZm0yVnNz!2m2!1d45.71218779648877!2d14.45914779806241!3f141.89!4f-3.8299999999999983!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>	
		</div> 
		<div id="myModal2" class="modal">
			<span id="close2" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>
			<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
		</div> 
		<div id="myModal3" class="modal">
			<span id="close3" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>
			<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
		</div> 
		<div id="myModal4" class="modal">
			<span id="close4" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>
			<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
		</div> 
		<div id="myModal5" class="modal">
			<span id="close5" onclick="document.getElementById('myModal5').style.display='none'">&times;</span>
			<img class="modal-content" src="<?php bloginfo('template_url'); ?>/images/ozavodu-fotka1.jpg">
		</div> 
	</article>

	<article class="section">
		<img class="backgr" src="<?php the_field('ozavodu-slika2'); ?>" alt="Fotografija poslanstvo">
		<div class="text-tile">
			<?php the_field('ozavodu-poslanstvo'); ?>
		</div>
	</article>

	<article class="section">
		<img class="backgr" src="<?php the_field('ozavodu-slika3'); ?>" alt="Fotografija zgodovina">
		<div class="text-tile">
			<?php the_field('ozavodu-zgodovina'); ?>
		</div>
	</article>

<?php
get_footer();
 ?>
