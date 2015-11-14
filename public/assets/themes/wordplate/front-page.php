<?php
/**
 * Template for the front page
 *
 */

get_header();

if(have_posts()) : while(have_posts()) : the_post();

  $menu = (object) array(
    "menus" => get_field('sandwiches'),
    "sides" => get_field('sides'),
    "mods"  => get_field('modifiers'),
  );

  $hours = (object) array();

  $meta  = (object) array();

endwhile; else: 



endif;


get_footer();
