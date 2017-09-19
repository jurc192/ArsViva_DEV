<?php get_header(); ?>

<main id="main" class="site-main">
	<?php get_sidebar(); ?>
	<article class="section">
	
		<img class="backgr" src="<?php the_field('nastanitev-slika1'); ?>" alt="Fotografija nastanitve">
		<div class="text-tile">
			<?php the_field('nastanitev-tekst1'); ?>
		</div>
	</article>

	<article class="section">
		<img class="backgr" src="<?php the_field('nastanitev-slika2'); ?>" alt="Fotografija nastanitve">
		<div class="text-tile">
			<?php the_field('nastanitev-tekst2'); ?>
		</div>
	</article>

	<article class="section">
		<img class="backgr" src="<?php the_field('nastanitev-slika3'); ?>" alt="Fotografija nastanitve">
		<div class="text-tile">
			<?php the_field('nastanitev-tekst3'); ?>
		</div>
	</article>


<?php
get_footer();
 ?>
