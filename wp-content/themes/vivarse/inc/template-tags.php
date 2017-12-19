<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package vivarse
 */


/*
	JURE EDIT
	Front-page landing art
*/
function landing_art($banner_image_slider, $banner_image, $quote_overlay) {

	// Choose between banner image, banner image slider and video
	if ($banner_image_slider) :
		foreach($banner_image_slider as $image) {

			$img_url = $image['full_image_url'];
			echo "<img src='{$img_url}' class='image_slide' alt='landing image'>";
		}

	elseif ($banner_image) :
		echo "<img src='{$banner_image}' class='landing_image' alt='landing image'>";

	else:
		echo "<video id='intro-video' muted loop autoplay data-keepplaying data-autoplay>";
		echo   "<source src='".get_bloginfo('template_url')."/images/Intro_exp.mp4' type='video/mp4'>";
		echo   "<img src='".get_bloginfo('template_url')."/images/home-fotka2.jpg' title='Your browser does not support the <video> tag'>";
		echo "</video>";

	endif;

	// If quote overlay is enabled, show it
	if ($quote_overlay) :
		echo "<img id='intro-napis' src='".get_bloginfo('template_url')."/images/intro-napis.png'  alt='Ars viva: Na krilih priložnosti za prihodnost'>";
	endif;

}


/*
	JURE EDIT
	Custom template tag, for displaying sidebar-filter options
*/
function vivarse_event_options() {

	$event_categories = get_terms(array('taxonomy' => 'event_cat'));

	echo "<ul class='filter-options'>";

	foreach ($event_categories as $ndx => $cat) {
		$category_name = $cat->name;
		echo "<li>";
		echo "<input id='cat-{$ndx}' type='checkbox' name='vivarse-event-category[]' value='{$category_name}'>";
		echo "<label for='cat-{$ndx}' class='filter-category'>{$category_name}</label>";
		echo "</li>";
	}

}


/*
	JURE EDIT
	Listing upcoming event titles
*/
function vivarse_upcoming_titles($my_event_query) {

	if ( $my_event_query->have_posts() ) :
		if ( is_front_page() ):

			$count = 1;
			while( $my_event_query->have_posts() ) : $my_event_query->the_post();

				echo "<li>";
				echo "<h2 class='upcoming-title'>";
				// echo "<a href=' " , esc_url( get_permalink()) , "$count ' rel='bookmark'>" , get_the_title() , "</a>";
				echo "<a href='" , get_site_url() , "#upcoming/$count' rel='link to article'>" , get_the_title() , "</a>";
				echo "</h2>";
				echo "</li>";

				$count++;

			endwhile;

		else:
			// then what? Is this even possible?
		endif;

	else:
		echo "<h3>Ni prihajajočih dogodkov</h3>";
	endif;

	rewind_posts();

}


if ( ! function_exists( 'vivarse_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function vivarse_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Objavljeno dne %s', 'post date', 'vivarse' ),
			// esc_html_x( 'Posted on %s', 'post date', 'vivarse' ),
			// '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
			$time_string
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'vivarse' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		// echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
		// JURE EDIT -> original above
		echo '<span class="posted-on">' . $posted_on . '</span>';

	}
endif;

if ( ! function_exists( 'vivarse_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function vivarse_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'vivarse' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'vivarse' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'vivarse' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'vivarse' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'vivarse' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'vivarse' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
