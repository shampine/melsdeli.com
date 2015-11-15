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
  );

  $meta = (object) array(
    "hours"   => get_field('hours'),
    "address" => get_field('address'),
    "phone"   => get_field('phone'),
    "map"     => get_field('map'),
  ); ?>

  <div class="container menu">
    <div class="row">
      <div class="col-sm-5 col-sm-offset-1">
        <h1>Sandwiches</h1><?php
        if(is_array($menu->sandwiches) && sizeof($menu->sandwiches)) {
          echo '<ul class="sandwiches">';
          foreach($menu->sandwiches as $sandwich) {
            $price = isset($sandwich['price']) && $sandwich['price'] !== false
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
            echo '
              <li>
                <p class="name">'.$side['name'].'</p>
                <p class="description">'.$side['description'].'</p>
              </li>
            ';
          }
          echo '</ul>';
        } ?>
      </div>
    </div>
  </div>
  <hr>
  <div class="container meta">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1"><?php
        if($meta->hours) {
          echo '<p>'.$meta->hours.'</p>';
        } ?>
        <ul class="social">
          <li><a href="https://www.facebook.com/MelsDeliDTLA/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://www.yelp.com/biz/mels-deli-los-angeles" target="_blank"><i class="fa fa-yelp"></i></a></li>
        </ul>
        <div class="location"><?php
          if($meta->address !== false) {
            if($meta->map !== false) {
              echo '<p><a href="'.$meta->map.'" target="_blank">'.$meta->address.'</a></p>';
            } else {
              echo '<p>'.$meta->address.'</p>';
            }
          }
          if($meta->phone !== false) {
            echo '<p>'.$meta->phone.'</p>';
          } ?>
        </div>
      </div>
    </div>
  </div><?php

endwhile; else: 



endif;


get_footer();
