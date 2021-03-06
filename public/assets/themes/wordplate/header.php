<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php wp_title('|'); ?></title><?php
  wp_head();

  if(constant('WP_ENV') === "production") { ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-70147000-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script><?php
  } ?>
</head>
<body <?php body_class('bg-background'); ?>>
  <div class="container masthead">
    <img src="/assets/themes/wordplate/img/logo.png" alt="Mel's Deli in DTLA 90013">
  </div>