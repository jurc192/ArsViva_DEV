<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// single event
function vsel_single_content( $content ) { 
	if ( is_singular('event') && in_the_loop() ) { 
		global $wp_query; 
		$postid = $wp_query->post->ID;

		// get event meta
		$event_start_date = get_post_meta( $postid, 'event-start-date', true );
		$event_date = get_post_meta( $postid, 'event-date', true );
		$event_time = get_post_meta( $postid, 'event-time', true ); 
		$event_location = get_post_meta( $postid, 'event-location', true );
		$event_link = get_post_meta( $postid, 'event-link', true ); 
		$event_link_label = get_post_meta( $postid, 'event-link-label', true ); 
		$event_link_target = get_post_meta( $postid, 'event-link-target', true ); 

		// get labels from settingspage
		$event_date_label = esc_attr(get_option('vsel-setting-16'));
		$event_start_label = esc_attr(get_option('vsel-setting-17'));
		$event_end_label = esc_attr(get_option('vsel-setting-18'));
		$event_time_label = esc_attr(get_option('vsel-setting-19'));
		$event_location_label = esc_attr(get_option('vsel-setting-20'));

		// get setting to combine dates
		$event_date_combine = esc_attr(get_option('vsel-setting-15'));

		// show default label if empty setting
		if (empty($event_date_label)) {
			$event_date_label = esc_attr__( 'Date: %s', 'very-simple-event-list' );
		}
		if (empty($event_start_label)) {
			$event_start_label = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
		}
		if (empty($event_end_label)) {
			$event_end_label = esc_attr__( 'End date: %s', 'very-simple-event-list' );
		}
		if (empty($event_time_label)) {
			$event_time_label = esc_attr__( 'Time: %s', 'very-simple-event-list' );
		}
		if (empty($event_location_label)) {
			$event_location_label = esc_attr__( 'Location: %s', 'very-simple-event-list' );
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

		// set variables
		$date = '';
		$startdate = '';
		$sep = '';
		$enddate = '';
		$time = '';
		$location = '';
		$link = '';

		// error in case of wrong date or no start date (no start date in version 4.0 and older)
		if ( empty($event_start_date) || ($event_start_date > $event_date) ) {
			$date = '<p class="vsel-meta-date vsel-meta-error-date">' . esc_attr__( 'Error: please reset date', 'very-simple-event-list' ) . '</p>'; 
		}

		if ($event_date > $event_start_date) {
			if ($event_date_combine == "yes") {
				$startdate = '<p class="vsel-meta-date vsel-meta-combined-date">' . sprintf(esc_attr($event_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_start_date) ).'</span>' ); 
				$sep = ' - '; 
				$enddate = sprintf(esc_attr($event_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_date) ).'</span>' ) . '</p>'; 

			} else { 
				$startdate = '<p class="vsel-meta-date vsel-meta-start-date">' . sprintf(esc_attr($event_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_start_date) ).'</span>' ) . '</p>'; 
				$enddate = '<p class="vsel-meta-date vsel-meta-end-date">'. sprintf(esc_attr($event_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_date) ).'</span>' ) . '</p>'; 
			}
		} elseif ($event_date == $event_start_date) {
			$date = '<p class="vsel-meta-date vsel-meta-single-date">' . sprintf(esc_attr($event_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($event_date) ).'</span>' ) . '</p>'; 
		}
		if(!empty($event_time)){
			$time = '<p class="vsel-meta-time">' . sprintf(esc_attr($event_time_label), '<span>'.esc_attr($event_time).'</span>' ) . '</p>';
		} 
		if(!empty($event_location)){
			$location = '<p class="vsel-meta-location">' . sprintf(esc_attr($event_location_label), '<span>'.esc_attr($event_location).'</span>' ) . '</p>';
		}
		if(!empty($event_link)){
			$link = '<p class="vsel-meta-link">' . sprintf( '<a href="%1$s"'. $link_target .'>%2$s</a>', esc_url($event_link), esc_attr($event_link_label) ) . '</p>';
		}
		$content = '<div id="vsel">' . '<div class="vsel-meta">' . $date . $startdate . $sep . $enddate . $time . $location . $link . '</div>' . '<div class="vsel-image-info">' . $content . '</div>' . '</div>';   
  	} 
	return $content; 
}
add_filter( 'the_content', 'vsel_single_content' );
