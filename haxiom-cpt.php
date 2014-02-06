<?php
/*
Plugin Name: Haxiom Custom Post Types
Description: Custom Post Types for the Haxiom website.
Author: Haxiomers
Author URI: http://www.hax10m.com
*/

add_action( 'init', 'haxiom_cpt' );

function haxiom_cpt() {

register_post_type( 'member', array(
  	'labels' => array(
    'name' => 'Members',
    'singular_name' => 'Member',
   ),
  'description' => 'Member Profile',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
));
}