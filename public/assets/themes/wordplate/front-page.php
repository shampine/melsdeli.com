<?php
/**
 * Template for the front page
 *
 */

get_header();

if(have_posts()) : while(have_posts()) : the_post();

  $menu = (object) array(
    "sandwiches" => get_field('sandwiches'),
    "sides"      => get_field('sides'),
  ); ?>

  <div class="container menu">
    <div class="row">
      <div class="col-sm-5 col-sm-offset-1">
        <h1>Sandwiches</h1><?php
        if(is_array($menu->sandwiches) && sizeof($menu->sandwiches)) {
          echo '<ul class="sandwiches">';
          foreach($menu->sandwiches as $sandwich) {
            $price = isset($sandwich['price']) && $sandwich['price'] !== false ? '<span class="price">'.$sandwich['price'].'</span>' : '';
            echo '
              <li>
                <p class="name">'.$sandwich['name'].$price.'</p>
                <p class="description">'.$sandwich['description'].'</p>
              </li>
            ';
          }
          echo '</ul>';
        } ?>
      </div>
      <div class="col-sm-5">
        <h1>Sides</h1><?php
        if(is_array($menu->sides) && sizeof($menu->sides)) {
          echo '<ul class="sides">';
          foreach($menu->sides as $side) {
            $price = isset($side['price']) && $side['price'] !== false ? '<span class="price">'.$side['price'].'</span>' : '';
            echo '
              <li>
                <p class="name">'.$side['name'].$price.'</p>
                <p class="description">'.$side['description'].'</p>
              </li>
            ';
          }
          echo '</ul>';
        } ?>
      </div>
    </div>
  </div><?php

endwhile; else: 



endif;


get_footer();
