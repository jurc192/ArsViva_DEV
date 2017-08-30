<?php
/**
 * Plugin Name: Vivarse Events
 * Description: A plugin to manage events @Ars_Viva.
 * Version: 1.0
 * Author: Jure Vidmar
 * License: GPL2
 */

define( 'ROOT', plugins_url( '', __FILE__ ) );
define( 'IMAGES', ROOT . '/img/' );
define( 'STYLES', ROOT . '/css/' );
define( 'SCRIPTS', ROOT . '/js/' );

function vivarse_post_type() {

    register_post_type( 'event', array() );
}

add_action( 'init', 'vivarse_post_type' );
