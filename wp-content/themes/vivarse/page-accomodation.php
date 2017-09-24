<?php get_header(); ?>

<main id="main" class="site-main">
	<?php get_sidebar(); ?>
	<article class="section">

		<img class="backgr" src="<?php the_field('nastanitev-slika1'); ?>" alt="Fotografija nastanitve">
		<div class="text-tile static little-text">
			<?php the_field('nastanitev-tekst1'); ?>
		</div>
	</article>

	<article class="section">
		<img class="backgr" src="<?php the_field('nastanitev-slika2'); ?>" alt="Fotografija nastanitve">
		<div class="text-tile static little-text">
			<?php the_field('nastanitev-tekst2'); ?>
		</div>
	</article>

	<article class="section">
		<img class="backgr" src="<?php the_field('nastanitev-slika3'); ?>" alt="Fotografija nastanitve">
		<div class="text-tile static little-text">
			<?php the_field('nastanitev-tekst3'); ?>
		</div>
	</article>

<!-- JURE BACKP -->
	<!-- <main id="main" class="site-main">
			<?php get_sidebar(); ?>
		<article class="section">
			<img class="backgr" src="<?php bloginfo('template_url'); ?>/images/fotke_2/1soba.jpg" alt="soba">

			<div class="text-tile-static">
				<h2>Predstavitev</h2>
				<p class="dosti-teksta">
					Domačija Žnidaršič se nahaja v občini Loška dolina, natančneje v vasi Podcerkev. Tu je kot sad pridnega
					dela, vztrajnosti ter dobre volje nastala domačija, ki se je v dobrem stoletju razvila v pravi kulturni cen-ter
					na podeželju.
				</p>
				<p class="dosti-teksta">
					Tak kulturni center in inkubator razvojnih in tehnoloških idej, ki bodo spremenile življenje prebivalcev na
					vasi in jim ponudile rešitve, da bodo lahko v tem okolju preživeli. Kultura in kulturna dediščina nam bo
					sredstvo in polje izražanja ter možnost za uveljavljanja drugačnosti.
				</p>
			</div>
		</article>

		<article class="section">
			<img class="backgr" src="<?php bloginfo('template_url'); ?>/images/fotke_2/2dormi.jpg" alt="dormitorij">

			<div class="text-tile-static">
				<h2>Predstavitev</h2>
				<p class="dosti-teksta">
					Domačija Žnidaršič se nahaja v občini Loška dolina, natančneje v vasi Podcerkev. Tu je kot sad pridnega
					dela, vztrajnosti ter dobre volje nastala domačija, ki se je v dobrem stoletju razvila v pravi kulturni cen-ter
					na podeželju.
				</p>
				<p class="dosti-teksta">
					Tak kulturni center in inkubator razvojnih in tehnoloških idej, ki bodo spremenile življenje prebivalcev na
					vasi in jim ponudile rešitve, da bodo lahko v tem okolju preživeli. Kultura in kulturna dediščina nam bo
					sredstvo in polje izražanja ter možnost za uveljavljanja drugačnosti.
				</p>
			</div>
		</article>

		<article class="section">
			<img class="backgr" src="<?php bloginfo('template_url'); ?>/images/fotke_2/3zaga.jpg" alt="zaga">

			<div class="text-tile-static">
				<h2>Predstavitev</h2>
				<p class="dosti-teksta">
					Domačija Žnidaršič se nahaja v občini Loška dolina, natančneje v vasi Podcerkev. Tu je kot sad pridnega
					dela, vztrajnosti ter dobre volje nastala domačija, ki se je v dobrem stoletju razvila v pravi kulturni cen-ter
					na podeželju.
				</p>
				<p class="dosti-teksta">
					Tak kulturni center in inkubator razvojnih in tehnoloških idej, ki bodo spremenile življenje prebivalcev na
					vasi in jim ponudile rešitve, da bodo lahko v tem okolju preživeli. Kultura in kulturna dediščina nam bo
					sredstvo in polje izražanja ter možnost za uveljavljanja drugačnosti.
				</p>
			</div>
		</article> -->

<?php
get_footer();
 ?>
