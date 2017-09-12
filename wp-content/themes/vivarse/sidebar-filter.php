<?php
/**
 * The sidebar containing filter
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivarse
 */

/* Original je tukaj bil pogoj: if sidebar active...je to važno? */
/*
	Kaj sploh more filter delat?

	- POST-TYPE (posts, events)

	- EVENTS taxonomy (categories)
	- EVENTS start-date (RANGE!)

	- SEARCH
	- ARCHIVE

*/

	$post_types = get_post_types(array(), "names");

?>

<aside id="filter-sidebar" class="filter-sidebar">
	<?php dynamic_sidebar( 'sidebar-filter' ); ?>


	<!-- Naredi formo sam -->
	<!-- Style mora bit inline zaradi javascripta -->
	<!-- Naredi da bo obkljukan tisti post-type kot si ga izbral (je v $_GET) -->
	<form id="filter-popup" class="filter-popup" style="display: none;" action="" method="get">
		<h1>TEST FORM</h1>

		<input type="radio" name="vivarse-post-type" value="event"> Dogodki
		<input type="radio" name="vivarse-post-type" value="post"> Objave
		<input type="submit" value="vivarse-Submit">

		<div id="advanced-filter">
			<?php /* NAREDI TO V FUNKCIJI / TEMPLATE TAG-u! */
			
			$event_categories = get_terms(array('taxonomy' => 'event_cat'));
			foreach ($event_categories as $cat) {
				$category_name = $cat->name;
				echo "<input type='checkbox' name='vivarse-event-category' value='{$category_name}'> {$category_name}";
			}
			 ?>
		</div>
	</form>

	<h3 class="toggle-filter" onclick="toggleFilter()">FILTER</h3>
</aside><!-- #filter-sidebar -->
