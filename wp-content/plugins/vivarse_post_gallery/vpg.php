<?php
/*
  Plugin Name: Vivarse post gallery
  Description: Adds functionality to upload images to single posts
  Version: 1.0
  Author: Jure Vidmar
  License: GPLv2+
*/

function vpg_meta_box_markup() {
  // poglej kaj je fora tega "noncea"
  wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );?>

  <input type="button" name="add_img" value="">
  <?php

}

function add_vpg_meta_box() {
  add_meta_box("vpg-meta-box", "Galerija prispevka", "vpg_meta_box_markup", "post", "normal", "high", null);
}

add_action("add_meta_boxes", "add_vpg_meta_box");
