<?php
/**
 * vivarse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vivarse
 */


if ( ! function_exists( 'vivarse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vivarse_setup() {

	/* JURE EDIT */
	show_admin_bar( false );


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on vivarse, use a find and replace
	 * to change 'vivarse' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'vivarse', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'vivarse' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vivarse_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;


add_action( 'after_setup_theme', 'vivarse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vivarse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vivarse_content_width', 640 );
}
add_action( 'after_setup_theme', 'vivarse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vivarse_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vivarse' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vivarse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/* JURE EDIT: Filter sidebar */
	register_sidebar( array(
		'name'          => esc_html__( 'Filter Sidebar', 'vivarse' ),
		'id'            => 'sidebar-filter',
		'description'   => esc_html__( 'Add widgets here.', 'vivarse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	/* JURE EDIT: Social share bar */
  register_sidebar( array(
    'name'          => esc_html__( 'SocialShare bar', 'vivarse' ),
    'id'            => 'sidebar-social',
    'description'   => esc_html__( 'Add widgets here.', 'vivarse' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'vivarse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vivarse_scripts() {

	/* Jure edit */
	wp_enqueue_style( 'vivarse-style', get_stylesheet_uri() );
	wp_enqueue_style( 'fullPage-style', get_template_directory_uri() . '/sass/jquery.fullPage.css', false, '1', 'all' );

	/* jQuery stuff */
	wp_enqueue_script( 'jquery-ui-datepicker' );
	wp_enqueue_script( 'fullPage', get_template_directory_uri() . '/js/jquery.fullPage.js', array('jquery'), '1', true );
	wp_enqueue_script( 'textFill', get_template_directory_uri() . '/js/jquery.textfill.min.js', array('jquery'), '1', true );

	wp_enqueue_script( 'filter-sidebar', get_template_directory_uri() . '/js/filter-sidebar.js', array('jquery'), '1', true );
	wp_enqueue_script( 'accessibility', get_template_directory_uri() . '/js/accessibility.js', array('jquery'), '1', true );
	wp_enqueue_script( 'git-popup', get_template_directory_uri() . '/js/git-popup.js', array(), '1', true );
	wp_enqueue_script( 'my-fullPage-settings', get_template_directory_uri() . '/js/myFullPage.js', array('jquery', 'fullPage'), '1', true );
	wp_enqueue_script( 'my-textFill', get_template_directory_uri() . '/js/myTextFill.js', array('jquery'), '1', true );

	/* Modal Pictures */
	wp_enqueue_script( 'modal-pictures', get_template_directory_uri() . '/js/modal-pictures.js', array(), '20151215', true );


	/* Original */
	wp_enqueue_script( 'vivarse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'vivarse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vivarse_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * JURE EDIT - sidebar filtering stuff
 */
function vivarse_filter_posts($query) {
	// The $query object is passed to your function by reference.

	if (!empty($_GET) && $query->is_home() && $query->is_main_query()) {

		// Post type (required)
		$vivarse_post_type = $_GET['vivarse-post-type'];
		$query->set('post_type', $vivarse_post_type);


		// Event -> category (optional)
		$checked_categories = array();
		if (!empty($_GET['vivarse-event-category'])) {

			foreach($_GET['vivarse-event-category'] as $check) {
				$checked_categories[] = $check;
			}

			$tax_query = array(
				array(
					'taxonomy' => 'event_cat',
					'terms' => $checked_categories,
					'field' => 'slug',
				)
			);
			$query->set('tax_query', $tax_query);
		}

		// Event -> date (optional)
		// if (!empty( $_GET['vivarse-event-date'] )) {
		//
		// 	$vivarse_event_date = strtotime($_GET['vivarse-event-date']);
		//
		// 	$year = date('Y', $vivarse_event_date);
		// 	$month = date('n', $vivarse_event_date);
		// 	$day = date('j', $vivarse_event_date);
		//
		// 	echo "Post date unix: {$vivarse_event_date}<br>";
		// 	echo "Year: {$year}<br>";
		// 	echo "Month: {$month}<br>";
		// 	echo "Day: {$day}<br>";
		//
		// 	$my_meta_query = array(
		// 		'relation' => 'AND',
		// 		array(
		// 			'key' => 'event-date',
		// 			'value' => $vivarse_event_date,
		// 			'compare' => '=',
		// 			'type' => 'NUMERIC'
		// 		)
		// 	);
		//
		// 	$query->set('meta_query', $my_meta_query);
		// }

		// Post -> date (optional)
		if (!empty($_GET['vivarse-post-date'])) {

			$vivarse_post_date = strtotime($_GET['vivarse-post-date']);

			$date_query = array(
				array(
					'year' => $year,
					'month' => $month,
					'day' => $day,
				)
			);

			$query->set('date_query', $date_query);
		}

	}


	return $query;

}
add_action('pre_get_posts', 'vivarse_filter_posts');



/* Primoz - If there are images attached to the post, make a horizontal gallery.
	img title used as alt text
	*/
function event_gallery_get_images($post_id) {
	global $post;

	$thumbnail_ID = get_post_thumbnail_id();
	$images = get_children( array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );


	if ($images) :
		echo '<br><br> <div class="event-gallery-wrapper">';

		foreach ($images as $attachment_id => $image) :

			if ( $image->ID != $thumbnail_ID ) :

				$img_alt = $image->post_title;
				$src_array = image_downsize( $image->ID, 'large' );
				$img_url = $src_array[0];
				?>
					<div class="event-gallery">
						<img class="event-gallery-image" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
					</div>
				<?php
		endif;
		endforeach;
		echo '</div><!-- End gallery -->';
	endif;
}


/* Jure -remove VSEL single post filter */
remove_filter( 'the_content', 'vsel_single_content' );


/* Jure - Carousel-slider plugin script loading */
function carousel_slider_load_scripts($load_scripts) {
	if (is_front_page()) return true;
	return $load_scripts;
}
add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');

/* Jure title character count - copy/paste */
// http://passwordincorrect.com/add-character-count-to-title-and-excerpt-in-wordpress-post-editor/

function my_title_count(){ ?>
<script>jQuery(document).ready(function(){
jQuery("#titlediv .inside").after("<div style=\"position:absolute;top:40px;right:-5px;\"><span>Max 60 znakov:</span> <input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"title_counter\" readonly=\"\" style=\"background:none;border:none;box-shadow:none;font-weight:bold; text-align:right;\"></div>");
jQuery("#title_counter").val(jQuery("#title").val().length);
jQuery("#title").keyup( function() {
jQuery("#title_counter").val(jQuery("#title").val().length);
});
});
</script>
<?php }
add_action( 'admin_head-post.php', 'my_title_count');
add_action( 'admin_head-post-new.php', 'my_title_count');
?>
