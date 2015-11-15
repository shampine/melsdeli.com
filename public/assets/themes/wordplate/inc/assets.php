<?php

function wordplate_scripts() {

  // CSS
  $screen = '/css/screen.css';
  $screenFilePath = get_template_directory() . $screen;
  wp_enqueue_style('screen', get_bloginfo('template_directory') . $screen, false, filemtime($screenFilePath));

  // Fonts
  wp_enqueue_style('webfonts', '//fonts.googleapis.com/css?family=Roboto:400,300,500,300italic');
  wp_enqueue_style('webfonts', '//fonts.googleapis.com/css?family=Alegreya:400italic');

  // Libraries
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', false, null, true);

  $main = '/js/main.js';
  $mainFilePath = get_template_directory() . $main;
  wp_enqueue_script('main', get_bloginfo('template_url') . $main, array('jquery'), filemtime($mainFilePath), true);

  // HTML5 & responsive fallbacks
  wp_enqueue_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, null, false);

  // Font Awesome stylesheet
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, null, false);
}

if(!is_admin()) {
  add_action('get_header', 'wordplate_scripts');
}
