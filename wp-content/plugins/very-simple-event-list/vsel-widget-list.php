<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// get labels from settingspage
$widget_date_label = esc_attr(get_option('vsel-setting-22'));
$widget_start_label = esc_attr(get_option('vsel-setting-23'));
$widget_end_label = esc_attr(get_option('vsel-setting-24'));
$widget_time_label = esc_attr(get_option('vsel-setting-25'));
$widget_location_label = esc_attr(get_option('vsel-setting-26'));

// get setting to combine dates
$widget_date_combine = esc_attr(get_option('vsel-setting-21'));

// get setting to show excerpt
$widget_excerpt = esc_attr(get_option('vsel-setting-1'));	

// get setting to link title to single event
$widget_link_title = esc_attr(get_option('vsel-setting-14'));

// get settings to hide elements
$widget_date_hide = esc_attr(get_option('vsel-setting-2'));
$widget_time_hide = esc_attr(get_option('vsel-setting-3'));
$widget_location_hide = esc_attr(get_option('vsel-setting-4'));
$widget_image_hide = esc_attr(get_option('vsel-setting-5'));
$widget_link_hide = esc_attr(get_option('vsel-setting-6'));
$widget_info_hide = esc_attr(get_option('vsel-setting-7'));

// show default label if empty setting
if (empty($widget_date_label)) {
	$widget_date_label = esc_attr__( 'Date: %s', 'very-simple-event-list' );
}
if (empty($widget_start_label)) {
	$widget_start_label = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
}
if (empty($widget_end_label)) {
	$widget_end_label = esc_attr__( 'End date: %s', 'very-simple-event-list' );
}
if (empty($widget_time_label)) {
	$widget_time_label = esc_attr__( 'Time: %s', 'very-simple-event-list' );
}
if (empty($widget_location_label)) {
	$widget_location_label = esc_attr__( 'Location: %s', 'very-simple-event-list' );
}

// show default label if empty meta
if (empty($event_link_label)) {
	$event_link_label = esc_attr__( 'More info', 'very-simple-event-list' );
}

// set link target
if ($event_link_target == 'yes') {
	$link_target = ' target="_blank"';
} else {
	$link_target = ' target="_self"';
}

// set image size for featured image 
if ($vsel_atts['image_size'] == "small") {
	$post_thumbnail = 'thumbnail';
} elseif ($vsel_atts['image_size'] == "medium") {
	$post_thumbnail = 'medium';
} elseif ($vsel_atts['image_size'] == "large") {
	$post_thumbnail = 'large';
} else {
	$post_thumbnail = 'post-thumbnail';
}

// display the event list
$output .= '<div id="event-'.get_the_ID().'" class="vsel-content">'; 
	$output .= '<div class="vsel-meta">';
		if ($widget_link_title != 'yes') {
			$output .= '<h4 class="vsel-meta-title">' . get_the_title() . '</h4>';
		} else {
			$output .=  '<h4 class="vsel-meta-title"><a href="'. get_permalink() .'" rel="bookmark" title="'. get_the_title() .'">'. get_the_title() .'</a></h4>';
		}
		if ( !empty($event_start_date) && !empty($event_date) ) {
			// error in case of wrong date
			if ($event_start_date > $event_date) {
				$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
				$output .= esc_attr__( 'Error: please reset date', 'very-simple-event-list' ); 
				$output .= '</p>';
			}
			if ( ($widget_date_hide != 'yes') ) {
				if ($event_date > $event_start_date) {
					if ($widget_date_combine == "yes") {
						$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
						$output .= sprintf(esc_attr($widget_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_start_date) ).'</span>' ); 
						$output .= ' - ';
						$output .= sprintf(esc_attr($widget_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_date) ).'</span>' ); 
						$output .= '</p>';
					} else {
						$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
						$output .= sprintf(esc_attr($widget_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_start_date) ).'</span>' ); 
						$output .= '</p>';
						$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
						$output .= sprintf(esc_attr($widget_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_date) ).'</span>' ); 
						$output .= '</p>';
					}
				} elseif ($event_date == $event_start_date) {
					$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
					$output .= sprintf(esc_attr($widget_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_date) ).'</span>' ); 
					$output .= '</p>';
				}
			}
		}
		if ($widget_time_hide != 'yes') {
			if (!empty($event_time)){
				$output .= '<p class="vsel-meta-time">';
				$output .= sprintf(esc_attr($widget_time_label), '<span>'.esc_attr($event_time).'</span>' ); 
				$output .= '</p>';
			}
		}
		if ($widget_location_hide != 'yes') {
			if (!empty($event_location)){
				$output .= '<p class="vsel-meta-location">';
				$output .= sprintf(esc_attr($widget_location_label), '<span>'.esc_attr($event_location).'</span>' ); 
				$output .= '</p>';
			}
		}
		if ($widget_link_hide != 'yes') {
			if (!empty($event_link)){
				$output .= '<p class="vsel-meta-link">';
				$output .= sprintf( '<a href="%1$s"'. $link_target .'>%2$s</a>', esc_url($event_link), esc_attr($event_link_label) ); 
				$output .= '</p>';
			}
		}
	$output .= '</div>';
	$output .= '<div class="vsel-image-info">';
		if ($widget_image_hide != 'yes') {
			if ( has_post_thumbnail() ) { 
				$output .= get_the_post_thumbnail( null, $post_thumbnail, array('class' => 'vsel-image') ); 
			}
		}
		if ($widget_info_hide != 'yes') {
			$output .= '<div class="vsel-info">';
				if ($widget_excerpt != 'yes') {
					$output .= $content = apply_filters( 'the_content', get_the_content() ); 
				} elseif (!empty($event_summary)) {
					$output .= apply_filters( 'the_excerpt', $event_summary ); 
				}  else {
					$output .= $content = apply_filters( 'the_excerpt', get_the_excerpt() ); 
				}
			$output .= '</div>';
		}
	$output .= '</div>';
$output .= '</div>';
