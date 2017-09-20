<?php get_header(); ?>

<!-- JURE BACKP -->
<!--
<div class="text-tile-static">
	<h2>ARS VIVA</h2>
	<p class="dosti-teksta">
		ARS VIVA- Zavod za kulturno integracijo in socializacijo družbenih skupin <br><br>
		Podcerkev 24, 1386 Stari trg pri Ložu <br><br>
		TRR 03133-1000202343 SKB <br>
		ID za DDV: SI39453600 <br><br>
		tel: (386) (0)5 726 47 21 <br>
		mob: (386) (0)41 741 750 <br>
		mail: ars.viva@gmail.com
	</p> -->

<main id="main" class="site-main">
	<?php get_sidebar(); ?>
	<article class="section">
		<iframe class ="google-maps"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125287.85042863067!2d14.320511176443311!3d45.70596760145985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4764cfaa2633ea05%3A0xbd1161b05b7f93b7!2sArs+Viva%2C+zavod+za+kulturno+integracijo+in+Socializacijo+dru%C5%BEbenih+skupin!5e1!3m2!1ssl!2ssi!4v1503920112206" allowfullscreen></iframe>
		<div class="text-tile">
			<div id="contact-logo-div">
				<img id="contact-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png">
				<p> Zavod za kulturno <br> integracijo in socializacijo <br> kulturnih skupin </p>
			</div>
			<div id="contact-info-div">
				<p>
				Podcerkev <br> 24 1386 Stari trg pri Ložu <br> Slovenija </p><p>
				TRR 03133-1000202343 SKB <br>
				ID za DDV: SI39453600  </p><p>
				tel: (386) (0)5 726 47 21 <br>
				mob: (386) (0)41 741 750 </p><p>
				youthostel.arsviva@gmail.com
				</p>
			</div>
			<div id="formdiv">
			<?php echo do_shortcode('[contact-form-7 id="81" title="Kontakt" html_class="use-floating-validation-tip"]');  ?>
			</div>
		</div>
	</article>



<?php
get_footer();
 ?>
