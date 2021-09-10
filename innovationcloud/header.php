<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
    <title><?php bloginfo("name")?></title>
  </head>
  <body>
    <div class="header" style="background-image: url(<?php echo get_template_directory_uri()?>/images/bg.jpg);">
      <div class="container">

        <h1>
          <?php bloginfo("name")?>
        </h1>
        <p>
          <?php bloginfo("description")?>
        </p>
        <a class="btn" href="">Learn More</a>
      </div>
    </div>
    