<?php
/*
  Plugin Name: Vivarse post gallery
  Description: Adds functionality to upload images to single posts
  Version: 1.0
  Author: Jure Vidmar
  License: GPLv2+
*/

function vpg_meta_box_markup()
{

}

function add_vpg_meta_box()
{
    add_meta_box("vpg-meta-box", "Galerija prispevka", "vpg_meta_box_markup", "post", "normal", "high", null);
}

add_action("add_meta_boxes", "add_vpg_meta_box");
