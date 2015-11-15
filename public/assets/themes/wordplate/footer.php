<?php

  $front = get_option('page_on_front');

  $meta = (object) array(
    "hours"   => get_field('hours', $front),
    "address" => get_field('address', $front),
    "phone"   => get_field('phone', $front),
    "map"     => get_field('map', $front),
  ); ?>

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
  </div>

<?php wp_footer(); ?>
</body>
</html>